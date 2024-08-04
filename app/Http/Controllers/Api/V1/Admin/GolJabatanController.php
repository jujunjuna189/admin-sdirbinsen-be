<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\GolJabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GolJabatanController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = GolJabatan::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%");
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
            $gol_jabatan = $query->paginate($perPage);

            $data = [
                'gol_jabatan' => $gol_jabatan
            ];

            return responseJson('All gol jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
            ], [
                'nama.required' => "Nama wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $gol_jabatan = new GolJabatan;
            $gol_jabatan->nama = $request->input('nama');

            $gol_jabatan->save();

            $data = [
                'gol_jabatan' => $gol_jabatan
            ];

            return responseJson('Add gol jabatan', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $gol_jabatan = GolJabatan::find($id);
            if (!$gol_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
            ], [
                'nama.required' => "Nama gol jabatan wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $gol_jabatan->nama = $request->input('nama');

            $gol_jabatan->save();

            $data = [
                'gol_jabatan' => $gol_jabatan
            ];

            return responseJson('Update gol jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $gol_jabatan = GolJabatan::find($id);
            if (!$gol_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'gol_jabatan' => $gol_jabatan
            ];
            $gol_jabatan->delete();
            return responseJson('Delete gol jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
