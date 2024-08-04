<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendidikanMiliter;
use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatPendidikanMiliterController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = PendidikanMiliter::query()->where('personil_id', $id_personil)->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('dikma_diktuk_dibangun', 'like', "%$search%"); // Assuming 'category' is a column in the Material table
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $pendidikan_militer = $query->paginate($perPage);

            $data = [
                'pendidikan_militer' => $pendidikan_militer,
            ];

            return responseJson('All Pendidikan Militer', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_pendidikan_militer)
    {
        try {
            $pendidikan_militer = PendidikanMiliter::where('id',$id_pendidikan_militer)->first();
            if (!$pendidikan_militer) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'pendidikan_militer' => $pendidikan_militer
            ];
            return responseJson('Show Pendidikan Militer', 200, 'Success',$data);
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
                'dikma_diktuk_dibangun' => 'required',
                'tahun' => 'required|integer|digits:4',
            ], [
                'personil_id.required' => 'Personil ID wajib diisi!',
                'personil_id.numeric' => 'Format Personil ID salah!',
                'dikma_diktuk_dibangun.required' => 'Nama Diklat/Sekolah wajib diisi!',
                'tahun.required' => 'Tahun Lulus wajib diisi!',
                'tahun.digits' => 'Format Tahun Lulus salah!',
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            $pendidikan_militer = new PendidikanMiliter();

            $pendidikan_militer->personil_id = $request->input('personil_id');
            $pendidikan_militer->dikma_diktuk_dibangun = $request->input('dikma_diktuk_dibangun');
            $pendidikan_militer->tahun = $request->input('tahun');
            $pendidikan_militer->prestasi = $request->input('prestasi');

            $pendidikan_militer->save();

            $data = [
                'pendidikan_militer'=> $pendidikan_militer
            ];

            return responseJson('Add riwayat pendidikan militer', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id_personil, $id)
    {
        try {
            $pendidikan_militer = PendidikanMiliter::find($id);
            if (!$pendidikan_militer) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'dikma_diktuk_dibangun' => 'required',
                'tahun' => 'required|integer|digits:4',
            ],[
                'personil_id.required' => 'Personil ID wajib diisi!',
                'personil_id.numeric' => 'Format Personil ID salah!',
                'dikma_diktuk_dibangun.required' => 'Nama Diklat/Sekolah wajib diisi!',
                'tahun.required' => 'Tahun Lulus wajib diisi!',
                'tahun.digits' => 'Format Tahun Lulus salah!',
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
            $pendidikan_militer->personil_id = $request->input('personil_id');
            $pendidikan_militer->dikma_diktuk_dibangun = $request->input('dikma_diktuk_dibangun');
            $pendidikan_militer->tahun = $request->input('tahun');
            $pendidikan_militer->prestasi = $request->input('prestasi');

            $pendidikan_militer->save();

            $data = [
                'pendidikan_militer'=>$pendidikan_militer
            ];

            return responseJson('Update riwayat pendidikan militer', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id)
    {
        try {
            $pendidikan_militer = PendidikanMiliter::find($id);
            if (!$pendidikan_militer) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'pendidikan_militer'=>$pendidikan_militer
            ];
            $pendidikan_militer->delete();
            return responseJson('Delete riwayat pendidikan militer', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
