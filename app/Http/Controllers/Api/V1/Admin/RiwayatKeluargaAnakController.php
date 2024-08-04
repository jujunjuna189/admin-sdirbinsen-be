<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnakRiwayatKeluarga;
use App\Models\Personil;
use App\Models\RiwayatKeluarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatKeluargaAnakController extends Controller
{
    public function index($id_personil, $id_keluarga, Request $request)
    {
        try {
            $query = AnakRiwayatKeluarga::query()->where('riwayat_keluarga_id', $id_keluarga)->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%");
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Apply filtering by tanggal_lahir
            $tanggal_lahir = $request->input('tanggal_lahir');
            if (!empty($tanggal_lahir)) {
                $query->whereDate('tanggal_lahir', $tanggal_lahir);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $riwayat_keluarga_anak = $query->paginate($perPage);

            $data = [
                'riwayat_keluarga_anak' => $riwayat_keluarga_anak,
            ];

            return responseJson('All Riwayat Keluarga anak', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_keluarga, $id_anak)
    {
        try {
            $riwayat_keluarga_anak = AnakRiwayatKeluarga::where('id', $id_anak)->first();
            if (!$riwayat_keluarga_anak) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'riwayat_keluarga_anak' => $riwayat_keluarga_anak
            ];
            return responseJson('Show Riwayat Keluarga anak', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'riwayat_keluarga_id' => 'required|numeric',
                'nama' => 'required',
                'tanggal_lahir' => 'required:date',
            ], [
                'riwayat_keluarga_id.required' => 'Riwayat keluarga id wajib diisi!',
                'riwayat_keluarga_id.numeric' => 'Format riwayat keluarga id salah!',
                'nama.required' => 'Nama wajib diisi!',
                'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!'
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = RiwayatKeluarga::find($request->riwayat_keluarga_id);
            if (!$checkPersonil) {
                return responseJson("Personil not found", 404, "Error");
            }

            $riwayat_keluarga_anak = new AnakRiwayatKeluarga();
            $riwayat_keluarga_anak->riwayat_keluarga_id = $request->input('riwayat_keluarga_id');
            $riwayat_keluarga_anak->nama = $request->input('nama');
            $riwayat_keluarga_anak->tanggal_lahir = $request->input('tanggal_lahir');

            $riwayat_keluarga_anak->save();

            $data = [
                'riwayat_keluarga_anak' => $riwayat_keluarga_anak
            ];

            return responseJson('Add riwayat keluarga', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id_anak)
    {
        try {
            $riwayat_keluarga_anak = AnakRiwayatKeluarga::find($id_anak);
            if (!$riwayat_keluarga_anak) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'riwayat_keluarga_id' => 'required|numeric',
                'nama' => 'required',
                'tanggal_lahir' => 'required:date',
            ], [
                'riwayat_keluarga_id.required' => 'Riwayat keluarga id wajib diisi!',
                'riwayat_keluarga_id.numeric' => 'Format riwayat keluarga id salah!',
                'nama.required' => 'Nama wajib diisi!',
                'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!'
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = RiwayatKeluarga::find($request->riwayat_keluarga_id);
            if (!$checkPersonil) {
                return responseJson("Personil not found", 404, "Error");
            }

            // Update data
            $riwayat_keluarga_anak->personil_id = $request->input('personil_id');
            $riwayat_keluarga_anak->riwayat_keluarga_id = $request->input('riwayat_keluarga_id');
            $riwayat_keluarga_anak->nama = $request->input('nama');
            $riwayat_keluarga_anak->tanggal_lahir = $request->input('tanggal_lahir');

            $riwayat_keluarga_anak->save();

            $data = [
                'riwayat_keluarga_anak' => $riwayat_keluarga_anak
            ];

            return responseJson('Update riwayat keluarga', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_anak)
    {
        try {
            $riwayat_keluarga_anak = AnakRiwayatKeluarga::find($id_anak);
            if (!$riwayat_keluarga_anak) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'riwayat_keluarga_anak' => $riwayat_keluarga_anak
            ];
            $riwayat_keluarga_anak->delete();
            return responseJson('Delete riwayat keluarga', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
