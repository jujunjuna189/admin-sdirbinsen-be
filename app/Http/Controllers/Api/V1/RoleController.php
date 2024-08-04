<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function dropdown()
    {
        try {
            $role = Roles::all();

            $data = [
                'user' => $role
            ];

            return responseJson('All role', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
