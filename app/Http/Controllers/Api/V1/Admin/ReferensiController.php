<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Referensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReferensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query = Referensi::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%$search%");
                });
            }
            // Apply filtering
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->where('created_at', $created_at);
            }

            $path = $request->input('path');
            if (!empty($path)) {
                $query->where('path', $path);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $referensi = $query->paginate($perPage);

            $data = [
                'referensi' => $referensi
            ];

            return responseJson('All referensi', 200, 'Success', $data);
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
                'title' => 'required',
            ], [
                'title.required' => 'Judul wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $referensi = new Referensi();
            $referensi->path = $request->input('path');
            $referensi->title = $request->input('title');
            $referensi->link = $request->input('link');

            $referensi->save();


            $data = [
                'referensi' => $referensi
            ];

            return responseJson('Add referensi', 201, 'Success', $data);
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
            $referensi = Referensi::find($id);
            if (is_null($referensi)) {
                return responseJson('referensi not found', 404, 'Error');
            }

            $data = [
                'referensi' => $referensi
            ];

            return responseJson('detail referensi', 200, 'Success', $data);
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
                'title' => 'required',
            ], [
                'title.required' => 'Judul wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $referensi = Referensi::find($id);
            if (is_null($referensi)) {
                return responseJson('referensi not found', 404, 'Error');
            }


            $referensi->path = $request->input('path');
            $referensi->title = $request->input('title');
            $referensi->link = $request->input('link');

            $referensi->save();


            $data = [
                'referensi' => $referensi
            ];

            return responseJson('update referensi', 200, 'Success', $data);
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
            $referensi = Referensi::find($id);
            if (is_null($referensi)) {
                return responseJson('referensi not found', 404, 'Error');
            }

            $referensi->delete();


            $data = [
                'referensi' => $referensi
            ];

            return responseJson('delete referensi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
