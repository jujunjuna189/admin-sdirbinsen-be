<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{
    public function index(Request $request)
    {
        try {
            // $query = prestasi::search($request->Input('search'));
            $query = Prestasi::query();
            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nrp', 'like', "%$search%")
                        ->orWhere('nama_kegiatan', 'like', "%$search%")
                        ->orWhere('tempat', 'like', "%$search%")
                        ->orWhere('kep_piagam', 'like', "%$search%");
                });
            }

            // Apply filtering
            $tahun = $request->input('tahun');
            if (!empty($tahun)) {
                $query->whereDate('tahun', $tahun);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $prestasi = $query->paginate($perPage);

            $data = [
                'prestasi' => $prestasi
            ];

            return responseJson('All prestasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_prestasi)
    {
        try {
            $prestasi = Prestasi::find($id_prestasi);
            if (!$prestasi) {
                return responseJson('Prestasi not found', 404, 'Error');
            }

            $data = [
                'prestasi' => $prestasi,
            ];
            return responseJson('Show prestasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'nama_kegiatan' => 'required',
                'tahun' => 'required|numeric',
                'tempat' => 'required',
                'deskripsi' => 'nullable',
                'kep_piagam' => 'required',
            ], [
                'personil_id.required' => "Personil id wajib diisi",
                'personil_id.numeric' => "Format personil id salah",
                'nama_kegiatan.required' => "Nama kegiatan wajib diisi",
                'tahun.required' => "Tahun wajib diisi",
                'tahun.numeric' => "Format tahun salah",
                'tempat.required' => "Tempat wajib diisi",
                'kep_piagam.required' => "Kep piagam wajib diisi",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $prestasi = new Prestasi();
            $prestasi->personil_id = $request->personil_id;
            $prestasi->nama_kegiatan = $request->nama_kegiatan;
            $prestasi->tahun = $request->tahun;
            $prestasi->tempat = $request->tempat;
            $prestasi->deskripsi = $request->deskripsi;
            $prestasi->kep_piagam = $request->kep_piagam;
            $prestasi->save();

            $data = [
                'prestasi' => $prestasi
            ];

            return responseJson('Add prestasi', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id_prestasi)
    {
        try {
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'nama_kegiatan' => 'required',
                'tahun' => 'required|numeric',
                'tempat' => 'required',
                'deskripsi' => 'nullable',
                'kep_piagam' => 'required',
            ], [
                'personil_id.required' => "Personil id wajib diisi!",
                'personil_id.numeric' => "Format personil id salah",
                'nama_kegiatan.required' => "Nama kegiatan wajib diisi!",
                'tahun.required' => "Tahun wajib diisi!",
                'tahun.numeric' => "Format tahun salah",
                'tempat.required' => "Tempat wajib diisi!",
                'kep_piagam.required' => "Kep piagam wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $prestasi = Prestasi::find($id_prestasi);
            if (!$prestasi) {
                return responseJson('Prestasi not found', 404, 'Error');
            }

            $prestasi->personil_id = $request->personil_id;
            $prestasi->nama_kegiatan = $request->nama_kegiatan;
            $prestasi->tahun = $request->tahun;
            $prestasi->tempat = $request->tempat;
            $prestasi->deskripsi = $request->deskripsi;
            $prestasi->kep_piagam = $request->kep_piagam;
            $prestasi->save();

            $data = [
                'prestasi' => $prestasi
            ];

            return responseJson('Update prestasi', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id_prestasi)
    {
        try {
            $prestasi = Prestasi::find($id_prestasi);
            if (!$prestasi) {
                return responseJson('Prestasi not found', 404, 'Error');
            }

            $prestasi->delete();

            $data = [
                'prestasi' => $prestasi,
            ];
            return responseJson('Show prestasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
