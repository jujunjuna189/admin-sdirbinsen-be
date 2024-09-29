<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\RoleHasPermission;
use Illuminate\Http\Request;

class RoleHasPermissionController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = RoleHasPermission::query()->with('permission');
            // Apply filtering by role_id
            $role_id = $request->input('role_id');
            if (!empty($role_id)) {
                $query->where('role_id', $role_id);
            }

            // Paginate the results
            $roleHasPermission = $query->pluck('permission_id');
            $perPage = $request->input('per_page', 100);
            $permission = Permission::whereIn('id', $roleHasPermission)->paginate($perPage);

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
}
