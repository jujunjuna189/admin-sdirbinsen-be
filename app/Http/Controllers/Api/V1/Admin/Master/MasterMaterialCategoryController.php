<?php

namespace App\Http\Controllers\Api\V1\Admin\Master;

use App\Http\Controllers\Controller;
use App\Models\MasterMaterialCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MasterMaterialCategoryController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = MasterMaterialCategory::query();

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
            $masterMaterialCategory = $query->paginate($perPage);

            $data = [
                'master_material_category' => $masterMaterialCategory
            ];

            return responseJson('All masterMaterialCategory', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $masterMaterialCategory = MasterMaterialCategory::where('id',$id)->first();
            if (!$masterMaterialCategory) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'master_material_category' => $masterMaterialCategory
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

            $masterMaterialCategory = new MasterMaterialCategory();
            $masterMaterialCategory->name = $request->input('name');

            $masterMaterialCategory->save();

            $data = [
                'master_material_category' => $masterMaterialCategory
            ];

            return responseJson('Add master material category', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $masterMaterialCategory = MasterMaterialCategory::find($id);
            if (!$masterMaterialCategory) {
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

            $masterMaterialCategory->name = $request->input('name');

            $masterMaterialCategory->save();

            $data = [
                'master_material_category' => $masterMaterialCategory
            ];

            return responseJson('Update master material category', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $masterMaterialCategory = MasterMaterialCategory::find($id);
            if (!$masterMaterialCategory) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'master_material_category'=>$masterMaterialCategory
            ];
            $masterMaterialCategory->delete();
            return responseJson('Delete master material category', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
