<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Exports\PersonilExport;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Imports\PersonilImport;
use App\Models\Agama;
use App\Models\AnakRiwayatKeluarga;
use App\Models\GolJabatan;
use App\Models\Jabatan;
use App\Models\Korps;
use App\Models\Pangkat;
use App\Models\PendidikanUmum;
use App\Models\Personil;
use App\Models\RiwayatJabatan;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PersonilController extends Controller
{
    public function index(Request $request)
    {
        try {
            // $query = Personil::search($request->Input('search'));
            $query = Personil::query();
            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('suku_bangsa', 'like', "%$search%")
                        ->orWhere('nrp', 'like', "%$search%")
                        ->orWhere('nama', 'like', "%$search%")
                        ->orWhere('tempat_lahir', 'like', "%$search%");
                });
            }

            // Apply filtering by satuan
            $satuan_id = $request->input('satuan_id');
            if (!empty($satuan_id)) {
                $query->where('satuan_id', $satuan_id);
            }

            // Apply filtering by tmt_tni
            $nrp = $request->input('nrp');
            if (!empty($nrp)) {
                $query->where('nrp', $nrp);
            }

            // Apply filtering by tmt_1
            $tmt_1 = $request->input('tmt_1');
            if (!empty($tmt_1)) {
                $query->whereYear('tmt_1', $tmt_1);
            }

            // Apply filtering by tmt_tni
            $tmt_tni = $request->input('tmt_tni');
            if (!empty($tmt_tni)) {
                $query->whereDate('tmt_tni', $tmt_tni);
            }

            // Apply filtering by agama
            $agama = $request->input('agama');
            if (!empty($agama)) {
                $query->where('agama', $agama);
            }

            // Apply filtering by golongan_darah
            $golongan_darah = $request->input('golongan_darah');
            if (!empty($golongan_darah)) {
                $query->where('golongan_darah', $golongan_darah);
            }

            // Apply filtering by status
            $status = $request->input('status');
            if (!empty($status)) {
                $query->where('status', $status);
            }

            // Apply filtering by status
            $status = $request->input('sumber_pa');
            if (!empty($status)) {
                $query->where('sumber_pa', $status);
            }


            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $personil = $query->paginate($perPage);

            $data = [
                'personil' => $personil
            ];

            return responseJson('All personil', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }



    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required',
                'nrp' => 'required',
                'nama' => 'required',
                'tanggal_lahir' => 'nullable|date',
                'tempat_lahir' => 'nullable',
                'agama' => 'nullable',
                'suku_bangsa' => 'nullable',
                'golongan_darah' => 'nullable',

                'gol_jabatan' => 'nullable',
                'jabatan' => 'nullable',
                'pangkat' => 'nullable',
                'korps' => 'nullable',
                'sumber_pa' => 'nullable',
                'psi' => 'nullable',
                'status' => 'nullable',

                'tmt_1' => 'nullable|date',
                'tmt_2' => 'nullable|date',
                'tmt_tni' => 'nullable|date',
                'tmt_jab' => 'nullable|date',

                'picture' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            ], [
                'satuan.required' => 'Satuan wajib diisi!',
                'nrp.required' => 'NRP wajib diisi!',
                'nama.required' => 'Nama wajib diisi!',
                'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!',
                'tanggal_lahir.date' => 'Format tanggal lahir salah!',
                'tempat_lahir.required' => 'Tempat lahir wajib diisi!',
                'tmt_tni.required' => 'TMT TNI wajib diisi!',
                'tmt_tni.date' => 'Format tmt tni salah!',
                'tmt.required' => 'TMT wajib diisi!',
                'tmt.date' => 'Format tmt salah!',
                'agama.required' => 'Agama wajib diisi!',
                'sumber_pa.required' => 'Sumber PA wajib diisi!',
                'suku_bangsa.required' => 'Suku bangsa wajib diisi!',
                'golongan_darah.required' => 'Golongan darah wajib diisi!',
                'status.required' => 'Status wajib diisi!',
                'picture.image' => 'File harus berupa gambar!',
                'picture.mimes' => 'Ekstensi file hanya boleh jpeg, png, jpg dan webp!',
                'picture.max' => 'Ukuran maksimum file adalah 5MB!'
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $nrp = Personil::where('nrp', $request->nrp)->first();
            if ($nrp) {
                $errors = $validator->errors();
                $errors->add('nrp', 'NRP already exists');
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $personil = new Personil;

            $personil->satuan_id = $request->input('satuan_id');
            $personil->nrp = $request->input('nrp');
            $personil->nama = $request->input('nama');
            $personil->tanggal_lahir = $request->input('tanggal_lahir');
            $personil->tempat_lahir = $request->input('tempat_lahir');
            $personil->agama = $request->input('agama');
            $personil->suku_bangsa = $request->input('suku_bangsa');
            $personil->golongan_darah = $request->input('golongan_darah');

            $personil->gol_jabatan = $request->input('gol_jabatan');
            $personil->jabatan = $request->input('jabatan');
            $personil->pangkat = $request->input('pangkat');
            $personil->korps = $request->input('korps');
            $personil->sumber_pa = $request->input('sumber_pa');
            $personil->psi = $request->input('psi');
            $personil->status = $request->input('status');

            $personil->tmt_1 = $request->input('tmt_1');
            $personil->tmt_2 = $request->input('tmt_2');
            $personil->tmt_tni = $request->input('tmt_tni');
            $personil->tmt_jab = $request->input('tmt_jab');

            $personil->picture = $request->input('picture');

            if ($request->hasFile('picture')) {
                $picture = $request->file('picture');

                $filename = Storage::disk('public')->put('personil/pictures', $picture);
                $personil->picture = $filename;

                // $filename = Storage::disk('public')->put('personil/pictures', $request->file('picture'));
                // // Kompres gambar sebesar 50%
                // $compressedImage = Image::make($picture)->resize(
                //     $picture->width() * 0.5,
                //     $picture->height() * 0.5
                // );
                // $fileName = time() . '_' . $picture->getClientOriginalName();
                // $path = $compressedImage->save(public_path('uploads/' . $fileName));
                // // Buat objek Personil dan simpan path gambar ke kolom 'picture'
                // $personil->picture = 'uploads/' . $fileName;
            }

            $personil->save();


            $data = [
                'personil' => $personil
            ];

            return responseJson('Add personil', 201, 'Success', $data);
        } catch (\Throwable $th) {
            throw $th;
            // $errorMessage = $th->getMessage();
            // return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            // $personil = Personil::where('id', $id)->first();
            $personil = Personil::notDeleted()
                ->with(
                    'satuan:id,nama',
                    'penugasanLuarNegeri',
                    'penugasanOperasi',
                    'pangkats',
                    'jabatans',
                    'prestasi',
                    'keluarga',
                    'tandaJasa',
                    'pendidikanUmum',
                    'pendidikanMiliter',
                    'kemampuanBahasa',
                )
                ->where('id', $id)
                ->first();

            if (!$personil) {
                return responseJson('Data not found', 404, 'Error');
            }

            $personil->riwayat_keluarga_anak = [];
            if ($personil->keluarga) {
                $riwayat_keluarga_anak = AnakRiwayatKeluarga::where('riwayat_keluarga_id', $personil->keluarga->id)->get();
                $personil->riwayat_keluarga_anak = $riwayat_keluarga_anak ?? [];
            }

            $data = [
                'personil' => $personil,
            ];
            return responseJson('Show personil', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $personil = Personil::find($id);
            if (!$personil) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required',
                'nrp' => 'required',
                'nama' => 'required',
                'tanggal_lahir' => 'nullable|date',
                'tempat_lahir' => 'nullable',
                'agama' => 'nullable',
                'suku_bangsa' => 'nullable',
                'golongan_darah' => 'nullable',

                'gol_jabatan' => 'nullable',
                'jabatan' => 'nullable',
                'pangkat' => 'nullable',
                'korps' => 'nullable',
                'sumber_pa' => 'nullable',
                'psi' => 'nullable',
                'status' => 'nullable',

                'tmt_1' => 'nullable|date',
                'tmt_2' => 'nullable|date',
                'tmt_tni' => 'nullable|date',
                'tmt_jab' => 'nullable|date',

                'picture' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            ], [
                'satuan.required' => 'Satuan wajib diisi!',
                'nrp.required' => 'NRP wajib diisi!',
                'nama.required' => 'Nama wajib diisi!',
                'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!',
                'tanggal_lahir.date' => 'Format tanggal lahir salah!',
                'tempat_lahir.required' => 'Tempat lahir wajib diisi!',
                'tmt_tni.required' => 'TMT TNI wajib diisi!',
                'tmt_tni.date' => 'Format tmt tni salah!',
                'tmt.required' => 'TMT wajib diisi!',
                'tmt.date' => 'Format tmt salah!',
                'agama.required' => 'Agama wajib diisi!',
                'sumber_pa.required' => 'Sumber PA wajib diisi!',
                'suku_bangsa.required' => 'Suku bangsa wajib diisi!',
                'golongan_darah.required' => 'Golongan darah wajib diisi!',
                'status.required' => 'Status wajib diisi!',
                'picture.image' => 'File harus berupa gambar!',
                'picture.mimes' => 'Ekstensi file hanya boleh jpeg, png, jpg dan webp!',
                'picture.max' => 'Ukuran maksimum file adalah 5MB!'
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // Update the personil data

            $personil->satuan_id = $request->input('satuan_id');
            $personil->nrp = $request->input('nrp');
            $personil->nama = $request->input('nama');
            $personil->tanggal_lahir = $request->input('tanggal_lahir');
            $personil->tempat_lahir = $request->input('tempat_lahir');
            $personil->agama = $request->input('agama');
            $personil->suku_bangsa = $request->input('suku_bangsa');
            $personil->golongan_darah = $request->input('golongan_darah');

            $personil->gol_jabatan = $request->input('gol_jabatan');
            $personil->jabatan = $request->input('jabatan');
            $personil->pangkat = $request->input('pangkat');
            $personil->korps = $request->input('korps');
            $personil->sumber_pa = $request->input('sumber_pa');
            $personil->psi = $request->input('psi');
            $personil->status = $request->input('status');

            $personil->tmt_1 = $request->input('tmt_1');
            $personil->tmt_2 = $request->input('tmt_2');
            $personil->tmt_tni = $request->input('tmt_tni');
            $personil->tmt_jab = $request->input('tmt_jab');

            if ($request->hasFile('picture')) {

                // $filePathOld = $personil->picture;
                // if (!$filePathOld) {
                //     Storage::disk('public')->delete($filePathOld);
                // }

                $picture = $request->file('picture');
                $filename = Storage::disk('public')->put('personil/pictures', $picture);
                $personil->picture = $filename;

                // $filename = Storage::disk('public')->put('personil/pictures', $request->file('picture'));
                // // Kompres gambar sebesar 50%
                // $compressedImage = Image::make($picture)->resize(
                //     $picture->width() * 0.5,
                //     $picture->height() * 0.5
                // );
                // $fileName = time() . '_' . $picture->getClientOriginalName();
                // $path = $compressedImage->save(public_path('uploads/' . $fileName));
                // // Buat objek Personil dan simpan path gambar ke kolom 'picture'
                // $personil->picture = 'uploads/' . $fileName;
            }


            $personil->save();

            $data = [
                'personil' => $personil
            ];

            return responseJson('Update personil', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function updatePassword(Request $request, $id)
    {
        try {
            $personil = Personil::find($id);
            if (!$personil) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'new_password' => 'required|min:8|max:128|alpha_num',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }
            // Update the personil data
            $personil->password = Hash::make($request->new_password);
            $personil->save();
            $data = [
                'personil' => $personil
            ];

            return responseJson('Update password personil', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $personil = Personil::find($id);
            if (!$personil) {
                return responseJson('Data not found', 404, 'Error');
            }
            $personil->deleted_at = Carbon::now();
            $personil->save();
            $data = [
                'personil' => $personil
            ];
            return responseJson('Delete personil', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    // public function getRiwayatJabatan()
    // {
    //     try {
    //         $jabatan = RiwayatJabatan::select('id', 'jabatan')->get();

    //         $data = [
    //             'jabatan' => $jabatan
    //         ];

    //         // Mengembalikan daftar dalam response JSON
    //         return responseJson('Show list jabatan', 200, 'Success', $data);
    //     } catch (\Throwable $th) {
    //         $errorMessage = $th->getMessage();
    //         return responseJson($errorMessage, 500, 'Error');
    //     }
    // }

    public function getGolJabatan()
    {
        // Mengambil daftar dari data personil
        $gol_jabatan = GolJabatan::select('id', 'nama')->get();

        $data = [
            'gol_jabatan' => $gol_jabatan
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list gol jabatan', 200, 'Success', $data);
    }

    public function getJabatan()
    {
        // Mengambil daftar dari data personil
        $jabatan = Jabatan::select('id', 'nama')->get();

        $data = [
            'jabatan' => $jabatan
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list jabatan', 200, 'Success', $data);
    }

    public function getPangkat()
    {
        // Mengambil daftar dari data personil
        $pangkat = Pangkat::select('id', 'nama')->get();

        $data = [
            'pangkat' => $pangkat
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list pangkat', 200, 'Success', $data);
    }

    public function getKorps()
    {
        // Mengambil daftar dari data personil
        $korps = Korps::select('id', 'nama')->get();

        $data = [
            'korps' => $korps
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list korps', 200, 'Success', $data);
    }

    public function getSatuan()
    {
        // Mengambil daftar dari data personil
        $satuan = Satuan::select('id', 'nama')->orderBy("order_number", "asc")->get();

        $data = [
            'satuan' => $satuan
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list satuan', 200, 'Success', $data);
    }

    public function getSukuBangsa()
    {
        // Mengambil daftar posisi (distinct) dari data personil
        $suku_bangsa = Personil::distinct('suku_bangsa')->pluck('suku_bangsa');

        $data = [
            'suku_bangsa' => $suku_bangsa
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list suku_bangsa', 200, 'Success', $data);
    }

    public function getAgama()
    {
        $agama = Agama::distinct('nama')->pluck('nama');

        $data = [
            'agama' => $agama
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list agama', 200, 'Success', $data);
    }

    public function getSumberPA()
    {
        $sumber_pa = ['Akmil', 'Sepa PK', 'Secaba PK', 'BA PK', 'Ba reg', 'TA PK'];

        $data = [
            'sumber_pa' => $sumber_pa
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list Sumber PA', 200, 'Success', $data);
    }

    public function getGolonganDarah()
    {
        $golonganDarah = ['A', 'B', 'AB', 'O'];

        $data = [
            'golongan_darah' => $golonganDarah
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list golongan darah', 200, 'Success', $data);
    }

    public function exportPdf($id)
    {
        $personil = Personil::with(
            'jabatanSekarang',
            'kepangkatanSekarang',
            'satuanSekarang',
            'penugasanLuarNegeri',
            'penugasanOperasi',
            'pangkat',
            'jabatan',
            'keluarga',
            'tandaJasa',
            'pendidikanUmum',
            'pendidikanMiliter',
            'kemampuanBahasa',
        )
            ->where('id', $id)
            ->first();

        if (!$personil) {
            return responseJson('Personil not found', 404, false);
        }
        $pendidikanUmum = PendidikanUmum::where('personil_id', $personil->id);

        $riwayat_keluarga_anak = AnakRiwayatKeluarga::where('riwayat_keluarga_id', $personil->keluarga[0]->id)->get();

        $personil->riwayat_keluarga_anak = $riwayat_keluarga_anak ?? [];
        // Data that you want to pass to the view
        $data = [
            'personil' => $personil,
            'pendidikanUmum' => $pendidikanUmum,
        ];

        // Create a new Dompdf instance
        $dompdf = new Dompdf();

        // Load the view and render it to PDF
        $html = view('export.rhpersonil', $data)->render();
        $dompdf->loadHtml($html);

        // Set paper size and orientation (optional)
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF (important step)
        $dompdf->render();

        // Output the generated PDF (optional: you can choose to save it or stream it)
        return $dompdf->stream('personil.pdf');
    }

    public function importExcel(Request $request)
    {
        // Validate the updated data
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xls,xlsx',
        ]);
        if ($validator->fails()) {
            return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
        }

        $file = $request->file('file');

        try {
            Excel::import(new PersonilImport, $file);

            return response()->json([
                'message' => 'Data imported successfully',
                'status' => 'Success',
                'list_data' => []
            ], 200);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function exportExcel(Request $request)
    {
        // Mendapatkan data Personil
        $personils = Personil::all();

        // Menambahkan kolom 'Jumlah Tahun' dan 'Jumlah Sisa Bulan'
        $personils = $personils->map(function ($personil) {
            $startAt = Carbon::parse($personil->start_at);
            $now = Carbon::now();
            $diff = $startAt->diff($now);
            $personil->jumlah_tahun = $diff->y;
            $personil->jumlah_sisa_bulan = $diff->m;
            return $personil;
        });
        $personils = $personils->map(function ($personil) {
            unset($personil->created_at);
            unset($personil->updated_at);
            return $personil;
        });

        // Mengekspor data ke dalam format Excel
        return Excel::download(new PersonilExport($personils), 'personil.xlsx');
    }
}
