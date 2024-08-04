<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgamaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query = Agama::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%");
                });
            }
            // Apply filtering
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->where('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $agama = $query->paginate($perPage);

            $data = [
                'agama' => $agama
            ];

            return responseJson('All agama', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
            ], [
                'nama.required' => 'Nama wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $agama = new Agama();
            $agama->nama = $request->input('nama');

            $agama->save();


            $data = [
                'agama' => $agama
            ];

            return responseJson('Add agama', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $agama = Agama::find($id);
            if (is_null($agama)) {
                return responseJson('agama not found', 404, 'Error');
            }

            $data = [
                'agama' => $agama
            ];

            return responseJson('detail agama', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
            ], [
                'nama.required' => 'Nama wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $agama = Agama::find($id);
            if (is_null($agama)) {
                return responseJson('agama not found', 404, 'Error');
            }


            $agama->nama = $request->input('nama');

            $agama->save();


            $data = [
                'agama' => $agama
            ];

            return responseJson('update agama', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $agama = Agama::find($id);
            if (is_null($agama)) {
                return responseJson('agama not found', 404, 'Error');
            }

            $agama->delete();


            $data = [
                'agama' => $agama
            ];

            return responseJson('delete agama', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
