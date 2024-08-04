<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personil;
use App\Models\RiwayatPenugasanLuarNegeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatPenugasanLuarNegeriController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatPenugasanLuarNegeri::query()->where('personil_id', $id_personil)->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('macam_tugas', 'like', "%$search%")
                    ->orWhere('negara', 'like', "%$search%"); // Assuming 'category' is a column in the Material table
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $tugas_luar_negeri = $query->paginate($perPage);

            $data = [
                'tugas_luar_negeri' => $tugas_luar_negeri,
            ];

            return responseJson('All Riwayat Penugasan Luar Negeri', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_tugas_luar_negeri)
    {
        try {
            $tugas_luar_negeri = RiwayatPenugasanLuarNegeri::where('id',$id_tugas_luar_negeri)->first();
            if (!$tugas_luar_negeri) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'tugas_luar_negeri' => $tugas_luar_negeri
            ];
            return responseJson('Show Riwayat Penugasan Luar Negeri', 200, 'Success',$data);
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
                'macam_tugas' => 'required',
                'tahun' => 'required|integer|digits:4',
                'negara' => 'required',
            ], [
                'personil_id.required' => 'Personil ID wajib diisi!',
                'personil_id.numeric' => 'Format Personil ID salah!',
                'macam_tugas.required' => 'Macam Tugas wajib diisi!',
                'tahun.required' => 'Tahun wajib diisi!',
                'tahun.integer' => 'Format tahun salah!',
                'tahun.digits' => 'Panjang format tahun harus 4 digit!',
                'negara.required' => 'Negara tujuan wajib diisi!',
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            $tugas_luar_negeri = new RiwayatPenugasanLuarNegeri();

            $tugas_luar_negeri->personil_id = $request->input('personil_id');
            $tugas_luar_negeri->macam_tugas = $request->input('macam_tugas');
            $tugas_luar_negeri->tahun = $request->input('tahun');
            $tugas_luar_negeri->negara = $request->input('negara');
            $tugas_luar_negeri->prestasi = $request->input('prestasi');

            $tugas_luar_negeri->save();

            $data = [
                'tugas_luar_negeri'=> $tugas_luar_negeri
            ];

            return responseJson('Add riwayat tugas luar negeri', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $tugas_luar_negeri = RiwayatPenugasanLuarNegeri::find($id);
            if (!$tugas_luar_negeri) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'macam_tugas' => 'required',
                'tahun' => 'required|integer|digits:4',
                'negara' => 'required',
            ], [
                'personil_id.required' => 'Personil ID wajib diisi!',
                'personil_id.numeric' => 'Format Personil ID salah!',
                'macam_tugas.required' => 'Macam Tugas wajib diisi!',
                'tahun.required' => 'Tahun wajib diisi!',
                'tahun.integer' => 'Format tahun salah!',
                'tahun.digits' => 'Panjang format tahun harus 4 digit!',
                'negara.required' => 'Negara tujuan wajib diisi!'
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
            $tugas_luar_negeri->personil_id = $request->input('personil_id');
            $tugas_luar_negeri->macam_tugas = $request->input('macam_tugas');
            $tugas_luar_negeri->tahun = $request->input('tahun');
            $tugas_luar_negeri->negara = $request->input('negara');
            $tugas_luar_negeri->prestasi = $request->input('prestasi');

            $tugas_luar_negeri->save();

            $data = [
                'tugas_luar_negeri'=>$tugas_luar_negeri
            ];

            return responseJson('Update riwayat tugas luar negeri', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id)
    {
        try {
            $tugas_luar_negeri = RiwayatPenugasanLuarNegeri::find($id);
            if (!$tugas_luar_negeri) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'tugas_luar_negeri'=>$tugas_luar_negeri
            ];
            $tugas_luar_negeri->delete();
            return responseJson('Delete riwayat tugas luar negeri', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
