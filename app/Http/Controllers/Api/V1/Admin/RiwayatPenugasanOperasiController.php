<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personil;
use App\Models\RiwayatPenugasanOperasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatPenugasanOperasiController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatPenugasanOperasi::query()->where('personil_id', $id_personil)->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama_operasi', 'like', "%$search%")
                    ->orWhere('prestasi', 'like', "%$search%"); // Assuming 'category' is a column in the Material table
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $tugas_operasi = $query->paginate($perPage);

            $data = [
                'tugas_operasi' => $tugas_operasi,
            ];

            return responseJson('All Riwayat Penugasan Operasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_tugas_operasi)
    {
        try {
            $tugas_operasi = RiwayatPenugasanOperasi::where('id',$id_tugas_operasi)->first();
            if (!$tugas_operasi) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'tugas_operasi' => $tugas_operasi
            ];
            return responseJson('Show Riwayat Penugasan Operasi', 200, 'Success',$data);
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
                'nama_operasi' => 'required',
                'tahun' => 'required|integer|digits:4',
                'prestasi' => 'nullable',
            ],[
                'personil_id.required'=>"Personil ID wajib diisi!",
                'personil_id.numeric'=>"Format Personil ID salah!",
                'nama_operasi.required'=>"Nama operasi wajib diisi!",
                'tahun.required'=>"Tahun wajib diisi!",
                'tahun.integer'=>"Format tahun salah!",
                'tahun.digits'=>"Panjang format tahun harus 4 digit!",
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            $tugas_operasi = new RiwayatPenugasanOperasi();

            $tugas_operasi->personil_id = $request->input('personil_id');
            $tugas_operasi->nama_operasi = $request->input('nama_operasi');
            $tugas_operasi->tahun = $request->input('tahun');
            $tugas_operasi->prestasi = $request->input('prestasi');

            $tugas_operasi->save();

            $data = [
                'tugas_operasi'=> $tugas_operasi
            ];

            return responseJson('Add riwayat tugas operasi', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $tugas_operasi = RiwayatPenugasanOperasi::find($id);
            if (!$tugas_operasi) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'nama_operasi' => 'required',
                'tahun' => 'required|integer|digits:4',
                'prestasi' => 'nullable',
            ],[
                'personil_id.required'=>"Personil ID wajib diisi!",
                'personil_id.numeric'=>"Format Personil ID salah!",
                'nama_operasi.required'=>"Nama operasi wajib diisi!",
                'tahun.required'=>"Tahun wajib diisi!",
                'tahun.integer'=>"Format tahun salah!",
                'tahun.digits'=>"Panjang format tahun harus 4 digit!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            // Update data
            $tugas_operasi->personil_id = $request->input('personil_id');
            $tugas_operasi->nama_operasi = $request->input('nama_operasi');
            $tugas_operasi->tahun = $request->input('tahun');
            $tugas_operasi->prestasi = $request->input('prestasi');

            $tugas_operasi->save();

            $data = [
                'tugas_operasi'=>$tugas_operasi
            ];

            return responseJson('Update riwayat tugas operasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id)
    {
        try {
            $tugas_operasi = RiwayatPenugasanOperasi::find($id);
            if (!$tugas_operasi) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'tugas_operasi'=>$tugas_operasi
            ];
            $tugas_operasi->delete();
            return responseJson('Delete riwayat tugas operasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
