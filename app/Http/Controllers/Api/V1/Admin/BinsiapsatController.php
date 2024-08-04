<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Binsiapsat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BinsiapsatController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Binsiapsat::query()->with('satuan');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('kuantitatif', 'like', "%$search%");
                });
            }

            // Apply filtering
            $kategori = $request->input('kategori');
            if (!empty($kategori)) {
                $query->where('kategori', $kategori);
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $binsiapsat = $query->paginate($perPage);

            $data = [
                'binsiapsat' => $binsiapsat
            ];

            return responseJson('All binsiapsat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $binsiapsat = Binsiapsat::with('satuan')->where('id',$id)->first();
            if (!$binsiapsat) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'binsiapsat' => $binsiapsat
            ];
            return responseJson('Show binsiapsat', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required|exists:satuan,id',
                // 'kategori_id' => 'required|exists:master_binsiapsat_categories,id',
                'kategori' => 'nullable',
                'kuantitatif' => 'nullable',
                'kualitatif' => 'nullable',
                'kemantapan' => 'nullable',
                'keterangan' => 'nullable',
                'file' => 'nullable',
            ], [
                'satuan_id.required' => "Satuan wajib diisi!",
                'satuan_id.exists' => "Satuan tidak ditemukan!",
                // 'kategori_id.required' => "Kategori wajib diisi!",
                // 'kategori_id.exists' => "Kategori tidak ditemukan!",
                // 'kategori.required' => 'Kategori wajib diisi',
                // 'kuantitatif.required' => "Kuantitatif wajib diisi!",
                // 'kualitatif.required' => "Kualitatif wajib diisi!",
                // 'kemantapan.required' => 'Kemantapan wajib diisi!',
                // 'file.required' => 'File wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $binsiapsat = new Binsiapsat($request->all());

            $binsiapsat->save();

            $data = [
                'binsiapsat' => $binsiapsat
            ];

            return responseJson('Add master binsiapsat', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $binsiapsat = Binsiapsat::find($id);
            if (!$binsiapsat) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required|exists:satuan,id',
                // 'kategori_id' => 'required|exists:master_binsiapsat_categories,id',
                'kategori' => 'nullable',
                'kuantitatif' => 'nullable',
                'kualitatif' => 'nullable',
                'kemantapan' => 'nullable',
                'keterangan' => 'nullable',
                'file' => 'nullable',
            ], [
                'satuan_id.required' => "Satuan wajib diisi!",
                'satuan_id.exists' => "Satuan tidak ditemukan!",
                // 'kategori_id.required' => "Kategori wajib diisi!",
                // 'kategori_id.exists' => "Kategori tidak ditemukan!",
                // 'kategori.required' => 'Kategori wajib diisi',
                // 'kuantitatif.required' => "Kuantitatif wajib diisi!",
                // 'kualitatif.required' => "Kualitatif wajib diisi!",
                // 'kemantapan.required' => 'Kemantapan wajib diisi!',
                // 'file.required' => 'File wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $binsiapsat->update($request->all());

            $binsiapsat->save();

            $data = [
                'binsiapsat' => $binsiapsat
            ];

            return responseJson('Update master binsiapsat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $binsiapsat = Binsiapsat::find($id);
            if (!$binsiapsat) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'binsiapsat'=>$binsiapsat
            ];
            $binsiapsat->delete();
            return responseJson('Delete master binsiapsat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
