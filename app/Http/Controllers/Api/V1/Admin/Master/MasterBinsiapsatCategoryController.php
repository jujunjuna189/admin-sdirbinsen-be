<?php

namespace App\Http\Controllers\Api\V1\Admin\Master;

use App\Http\Controllers\Controller;
use App\Models\MasterBinsiapsatCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MasterBinsiapsatCategoryController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = MasterBinsiapsatCategory::query();

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
            $masterBinsiapsatCategory = $query->paginate($perPage);

            $data = [
                'master_binsiapsat_category' => $masterBinsiapsatCategory
            ];

            return responseJson('All masterBinsiapsatCategory', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $masterBinsiapsatCategory = MasterBinsiapsatCategory::where('id',$id)->first();
            if (!$masterBinsiapsatCategory) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'master_binsiapsat_category' => $masterBinsiapsatCategory
            ];
            return responseJson('Show Satuan', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ], [
                'name.required' => "Nama wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $masterBinsiapsatCategory = new MasterBinsiapsatCategory();
            $masterBinsiapsatCategory->name = $request->input('name');

            $masterBinsiapsatCategory->save();

            $data = [
                'master_binsiapsat_category' => $masterBinsiapsatCategory
            ];

            return responseJson('Add master binsiapsat category', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $masterBinsiapsatCategory = MasterBinsiapsatCategory::find($id);
            if (!$masterBinsiapsatCategory) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ], [
                'name.required' => "Nama wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $masterBinsiapsatCategory->name = $request->input('name');

            $masterBinsiapsatCategory->save();

            $data = [
                'master_binsiapsat_category' => $masterBinsiapsatCategory
            ];

            return responseJson('Update master binsiapsat category', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $masterBinsiapsatCategory = MasterBinsiapsatCategory::find($id);
            if (!$masterBinsiapsatCategory) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'master_binsiapsat_category'=>$masterBinsiapsatCategory
            ];
            $masterBinsiapsatCategory->delete();
            return responseJson('Delete master binsiapsat category', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
