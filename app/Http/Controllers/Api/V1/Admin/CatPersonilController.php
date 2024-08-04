<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\CatPersonil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CatPersonilController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = CatPersonil::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%");
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $cat_personil = $query->paginate($perPage);

            $data = [
                'cat_personil' => $cat_personil
            ];

            return responseJson('All cat personil', 200, 'Success', $data);
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
                'name' => 'required',
                'file' => 'nullable|file|max:5128',
            ], [
                'personil_id.required' => 'Personil ID wajib diisi!',
                'name.required' => 'Name wajib diisi!',
                'file.required' => 'File wajib diisi!',
                'file.file' => 'Format file harus berupa file!',
                'file.max' => 'Ukuran maksimal file adalah 5MB!'
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $catPersonil = new CatPersonil();
            $catPersonil->personil_id = $request->input('personil_id');
            $catPersonil->name = $request->input('name');

            if ($request->hasFile('file')) {
                $picture = $request->file('file');

                $filename = Storage::disk('public')->put('cat_personil/file', $picture);

                $catPersonil->file = $filename;

            }

            $catPersonil->save();

            $data = [
                'cat_personil'=> $catPersonil
            ];

            return responseJson('Add cat personil', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_cat_personil)
    {
        try {
            $catPersonil = CatPersonil::find($id_cat_personil);
            if (!$catPersonil) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'cat_personil' => $catPersonil,
            ];
            return responseJson('Show cat personil', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id_cat_personil)
    {
        try {
            $catPersonil = CatPersonil::find($id_cat_personil);
            if (!$catPersonil) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required',
                'name' => 'required',
                'file' => 'nullable|file|max:5128',
            ], [
                'personil_id.required' => 'Personil ID wajib diisi!',
                'name.required' => 'Name wajib diisi!',
                'file.required' => 'File wajib diisi!',
                'file.file' => 'Format file harus berupa file!',
                'file.max' => 'Ukuran maksimal file adalah 5MB!'
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // Update the cat personil data
            $catPersonil->name = $request->name;
            $catPersonil->personil_id = $request->personil_id;

            if ($request->hasFile('file')) {
                $picture = $request->file('file');

                $filename = Storage::disk('public')->put('cat_personil/file', $picture);

                $catPersonil->file = $filename;

            }

            $catPersonil->save();
            $data = [
                'cat_personil' => $catPersonil
            ];

            return responseJson('Update cat personil', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }


    public function destroy($id_cat_personil)
    {
        try {
            $catPersonil = CatPersonil::find($id_cat_personil);
            if (!$catPersonil) {
                return responseJson('Data not found', 404, 'Error');
            };
            $catPersonil->delete();
            $data = [
                'cat_personil' => $catPersonil
            ];
            return responseJson('Delete user', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
