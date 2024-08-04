<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermissionAdminController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Permission::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('display', 'like', "%$search%")
                      ->orWhere('key', 'like', "%$search%");
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $permission = $query->paginate($perPage);

            $resultPermit = collect($permission->items())->transform(function ($item, $index) {
                list($resource, $action) = explode('.', $item['key']); // Replace 'key' with the actual key name you want to use

                return [
                    'resource' => $resource,
                    'action' => $action,
                    'original_data' => $item,
                ];
            })->groupBy('resource');

            $data = [
                'current_page' => $permission->currentPage(),
                'data' => $resultPermit,
                'first_page_url' => $permission->url(1),
                'from' => $permission->firstItem(),
                'last_page' => $permission->lastPage(),
                'last_page_url' => $permission->url($permission->lastPage()),
                'links' => null,
                'next_page_url' => $permission->nextPageUrl(),
                'path' => $permission->path(),
                'per_page' => $permission->perPage(),
                'prev_page_url' => $permission->previousPageUrl(),
                'to' => $permission->lastItem(),
                'total' => $permission->total(),
            ];


            return responseJson('All permission', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $permission = Permission::find($id);
            if (!$permission) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'permission' => $permission
            ];
            return responseJson('Show permission', 200, 'Success',$data);

        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'display' => 'required',
                'key' => 'required',
            ], [
                'display.required' => 'Display wajib diisi!',
                'key.required' => 'Key wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }


            $permission = new Permission();
            $permission->display = $request->input('display');
            $permission->key = $request->input('key');
            $permission->save();

            $data = [
                'permission'=> $permission
            ];

            return responseJson('Add permission', 201, 'Success', $data);

        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $permission = Permission::find($id);
            if (!$permission) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'display' => 'required',
                'key' => 'required',
            ], [
                'display.required' => 'Display wajib diisi!',
                'key.required' => 'Key wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // Update the data
            $permission->display = $request->display;
            $permission->key = $request->key;
            $permission->save();
            $data = [
                'permission' => $permission
            ];

            return responseJson('Update permission', 200, 'Success', $data);

        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $permission = Permission::find($id);
            if (!$permission) {
                return responseJson('Data not found', 404, 'Error');
            }
            $permission->delete();
            return responseJson('Delete permission success', 200, 'Success');
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
