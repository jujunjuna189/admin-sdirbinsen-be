<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\AnakRiwayatKeluarga;
use App\Models\Personil;
use App\Models\Satuan;
use Illuminate\Http\Request;

class PersonilSearcherController extends Controller
{
    public function index(Request $request)
    {
        try {
            // $query = Personil::search($request->Input('search'));
            $query = Personil::query();
            $query->with('satuan');
            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nrp', 'like', "%$search%")
                        ->orWhere('nama', 'like', "%$search%")
                        ->orWhere('tempat_lahir', 'like', "%$search%")
                        ->orWhere('suku_bangsa', 'like', "%$search%");
                });
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
            $perPage = $request->input('per_page', 50);
            $personil = $query->paginate($perPage);

            // $transformedPersonil = $personil->map(function ($item) {
            //     return [
            //         'id' => $item->id,
            //         'nrp' => $item->nrp,
            //         'nama' => $item->nama,
            //         'tanggal_lahir' => $item->tanggal_lahir,
            //         'tempat_lahir' => $item->tempat_lahir,
            //         'tmt_tni' => $item->tmt_tni,
            //         'tmt' => $item->tmt,
            //         'agama' => $item->agama,
            //         'suku_bangsa' => $item->suku_bangsa,
            //         'golongan_darah' => $item->golongan_darah,
            //         'sumber_pa' => $item->sumber_pa,
            //         'psi' => $item->psi,
            //         'status' => $item->status,
            //         'created_at' => $item->created_at,
            //         'updated_at' => $item->updated_at,
            //         'deleted_at' => $item->deleted_at,
            //         'jabatan' => ($item->jabatan) ? null : $item->jabatan->first()->jabatan,
            //         'pangkat' => $item->riwayatKepangkatan->isEmpty() ? null : $item->riwayatKepangkatan->first()->pangkat,
            //         'riwayat_jabatan' => $item->riwayatJabatan,
            //         'riwayat_kepangkatan' => $item->riwayatKepangkatan,
            //     ];
            // });

            $data = [
                'personil' => $personil
            ];

            return responseJson('All personil', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
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

            $data = [
                'personil' => $personil,
            ];
            return responseJson('Show personil', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function getSatuan()
    {
        // Mengambil daftar dari data personil
        $satuan = Satuan::select('id', 'nama')->get();

        $data = [
            'satuan' => $satuan
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list satuan', 200, 'Success', $data);
    }

    public function getPositionList()
    {
        // Mengambil daftar posisi (distinct) dari data personil
        $positions = Personil::distinct('position')->pluck('position');

        $data = [
            'position' => $positions
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list position', 200, 'Success', $data);
    }

    public function getRankList()
    {
        // Mengambil daftar posisi (distinct) dari data personil
        $rank = Personil::distinct('rank')->pluck('rank');

        $data = [
            'rank' => $rank
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list rank', 200, 'Success', $data);
    }

    public function getBattalionList()
    {
        // Mengambil daftar posisi (distinct) dari data personil
        $battalion_name = Personil::distinct('battalion_name')->pluck('battalion_name');

        $data = [
            'battalion_name' => $battalion_name
        ];
        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list battalion name', 200, 'Success', $data);
    }
}
