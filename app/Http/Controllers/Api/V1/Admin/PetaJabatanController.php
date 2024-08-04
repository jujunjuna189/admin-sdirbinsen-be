<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\PetaJabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetaJabatanController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = PetaJabatan::query();
            $query->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('perosnil_id', 'like', "%$search%");
                });
            }

            $id = $request->input('id');
            if (!empty($id)) {
                $query->where('id', $id);
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $peta_jabatan = $query->paginate($perPage);

            $data = [
                'peta_jabatan' => $peta_jabatan
            ];

            return responseJson('All peta_jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required',
                'golongan' => 'required',
                'jabatan' => 'required',
                'tmt' => 'required',
            ], [
                'personil_id.required' => "Personil wajib diisi!",
                'golongan.required' => "Golongan wajib diisi!",
                'jabatan.required' => "Jabatan wajib diisi!",
                'tmt.required' => "Tmt wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $peta_jabatan = new PetaJabatan;
            $peta_jabatan->personil_id = $request->input('personil_id');
            $peta_jabatan->kategori = $request->input('kategori');
            $peta_jabatan->golongan = $request->input('golongan');
            $peta_jabatan->jabatan = $request->input('jabatan');
            $peta_jabatan->tmt = $request->input('tmt');

            $peta_jabatan->save();

            $data = [
                'peta_jabatan' => $peta_jabatan
            ];

            return responseJson('Add peta_jabatan', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $peta_jabatan = PetaJabatan::find($id);
            if (!$peta_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required',
                'golongan' => 'required',
                'jabatan' => 'required',
                'tmt' => 'required',
            ], [
                'personil_id.required' => "Personil wajib diisi!",
                'golongan.required' => "Golongan wajib diisi!",
                'jabatan.required' => "Jabatan wajib diisi!",
                'tmt.required' => "Tmt wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $peta_jabatan->personil_id = $request->input('personil_id');
            $peta_jabatan->kategori = $request->input('kategori');
            $peta_jabatan->golongan = $request->input('golongan');
            $peta_jabatan->jabatan = $request->input('jabatan');
            $peta_jabatan->tmt = $request->input('tmt');

            $peta_jabatan->save();

            $data = [
                'peta_jabatan' => $peta_jabatan
            ];

            return responseJson('Update peta_jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $peta_jabatan = PetaJabatan::find($id);
            if (!$peta_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'peta_jabatan' => $peta_jabatan
            ];
            $peta_jabatan->delete();
            return responseJson('Delete Peta Jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
