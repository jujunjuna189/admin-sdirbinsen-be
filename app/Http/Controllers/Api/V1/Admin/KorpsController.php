<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Korps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KorpsController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Korps::query();

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
            $korps = $query->paginate($perPage);

            $data = [
                'korps' => $korps
            ];

            return responseJson('All korps', 200, 'Success', $data);
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

            $korps = new Korps;
            $korps->nama = $request->input('nama');

            $korps->save();

            $data = [
                'korps' => $korps
            ];

            return responseJson('Add korps', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $korps = Korps::find($id);
            if (!$korps) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
            ], [
                'nama.required' => "Nama korps wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $korps->nama = $request->input('nama');

            $korps->save();

            $data = [
                'korps' => $korps
            ];

            return responseJson('Update korps', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $korps = Korps::find($id);
            if (!$korps) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'korps' => $korps
            ];
            $korps->delete();
            return responseJson('Delete pangkat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
