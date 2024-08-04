<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personil;
use App\Models\RiwayatKeluarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatKeluargaController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatKeluarga::query()->where('personil_id', $id_personil)->with('keluargaAnak');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%")
                        ->orWhere('category', 'like', "%$search%"); // Assuming 'category' is a column in the Material table
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $riwayat_keluarga = $query->paginate($perPage);

            $data = [
                'riwayat_keluarga' => $riwayat_keluarga,
            ];

            return responseJson('All Riwayat Keluarga', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_keluarga)
    {
        try {
            $riwayat_keluarga = RiwayatKeluarga::where('id', $id_keluarga)->first();
            if (!$riwayat_keluarga) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'riwayat_keluarga' => $riwayat_keluarga
            ];
            return responseJson('Show Riwayat Keluarga', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|integer',
                'alamat_tinggal' => 'required',
                'nomor_hp' => 'required',
                'nama_ayah' => 'required',
                'nama_ibu' => 'required',
                'alamat_orang_tua' => 'required',
                'nama_istri_atau_suami' => 'required',
                'jumlah_anak' => 'nullable',
                'status' => 'required',
            ], [
                'personil_id.required' => "Personil ID wajib diisi!",
                'personil_id.integer' => "Format Personil ID salah!",
                'alamat_tinggal.required' => "Alamat Tinggal wajib diisi!",
                'nomor_hp.required' => "Nomor HP wajib diisi!",
                'nama_ayah.required' => "Nama Ayah wajib diisi!",
                'nama_ibu.required' => "Nama Ibu wajib diisi!",
                'alamat_orang_tua.required' => "Alamat Orang tua wajib diisi!",
                'nama_istri_atau_suami.required' => "Nama Istri atau Suami wajib diisi!",
                'status.required' => "Status wajib diisi!"
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if (!$checkPersonil) {
                return responseJson("Personil not found", 404, "Error");
            }

            $riwayat_keluarga = new RiwayatKeluarga();
            $riwayat_keluarga->personil_id = $request->input('personil_id');
            $riwayat_keluarga->alamat_tinggal = $request->input('alamat_tinggal');
            $riwayat_keluarga->nomor_hp = $request->input('nomor_hp');
            $riwayat_keluarga->nama_ayah = $request->input('nama_ayah');
            $riwayat_keluarga->nama_ibu = $request->input('nama_ibu');
            $riwayat_keluarga->alamat_orang_tua = $request->input('alamat_orang_tua');
            $riwayat_keluarga->nama_istri_atau_suami = $request->input('nama_istri_atau_suami');
            $riwayat_keluarga->jumlah_anak = $request->input('jumlah_anak');
            $riwayat_keluarga->status = $request->input('status');

            $riwayat_keluarga->save();

            $data = [
                'riwayat_keluarga' => $riwayat_keluarga
            ];

            return responseJson('Add riwayat keluarga', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id_personil, $id)
    {
        try {
            $riwayat_keluarga = RiwayatKeluarga::find($id);
            if (!$riwayat_keluarga) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|integer',
                'alamat_tinggal' => 'required',
                'nomor_hp' => 'required',
                'nama_ayah' => 'required',
                'nama_ibu' => 'required',
                'alamat_orang_tua' => 'required',
                'nama_istri_atau_suami' => 'required',
                'jumlah_anak' => 'nullable',
                'status' => 'required',
            ], [
                'personil_id.required' => "Personil ID wajib diisi!",
                'personil_id.integer' => "Format Personil ID salah!",
                'alamat_tinggal.required' => "Alamat Tinggal wajib diisi!",
                'nomor_hp.required' => "Nomor HP wajib diisi!",
                'nama_ayah.required' => "Nama Ayah wajib diisi!",
                'nama_ibu.required' => "Nama Ibu wajib diisi!",
                'alamat_orang_tua.required' => "Alamat Orang tua wajib diisi!",
                'status.required' => "Status wajib diisi!"
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if (!$checkPersonil) {
                return responseJson("Personil not found", 404, "Error");
            }

            // Update data
            $riwayat_keluarga->personil_id = $request->input('personil_id');
            $riwayat_keluarga->alamat_tinggal = $request->input('alamat_tinggal');
            $riwayat_keluarga->nomor_hp = $request->input('nomor_hp');
            $riwayat_keluarga->nama_ayah = $request->input('nama_ayah');
            $riwayat_keluarga->nama_ibu = $request->input('nama_ibu');
            $riwayat_keluarga->alamat_orang_tua = $request->input('alamat_orang_tua');
            $riwayat_keluarga->nama_istri_atau_suami = $request->input('nama_istri_atau_suami');
            $riwayat_keluarga->jumlah_anak = $request->input('jumlah_anak');
            $riwayat_keluarga->status = $request->input('status');

            $riwayat_keluarga->save();

            $data = [
                'riwayat_keluarga' => $riwayat_keluarga
            ];

            return responseJson('Update riwayat keluarga', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id)
    {
        try {
            $riwayat_keluarga = RiwayatKeluarga::find($id);
            if (!$riwayat_keluarga) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'riwayat_keluarga' => $riwayat_keluarga
            ];
            $riwayat_keluarga->delete();
            return responseJson('Delete riwayat keluarga', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
