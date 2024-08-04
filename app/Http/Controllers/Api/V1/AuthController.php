<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserPermission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function masterLogin(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
            ],[
                "username.required" => "Username wajib diisi!",
                "password.required" => "Password wajib diisi!"
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }
            $user = User::where('username',$request->username)->first();
            if (!$user) {
                return responseJson('Username atau Password salah',400,'Error');
            }

            if(! Auth::attempt($request->only('username','password'))){
                return responseJson('Username atau Password salah',400,'Error');
            }

            $userPermission = UserPermission::where('user_id',$user->id)->with('permission')->get();

            $permission = [];
            foreach ($userPermission as $permit) {
                $permission[$permit->permission->key] = true;
            }

            $role = '';
            if ($user->role_id == 1) {
                $role = 'admin';
            } else if ($user->role_id == 2) {
                $role = 'searcher';
            }

            $token = JWTAuth::fromUser($user);

            $data = [
                'user' => $user,
                'token' => $token,
                'role' => $role,
                'permission'=> $permission,
            ];

            return responseJson('Login Successfully', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function registration(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'username' => 'required',
                'password' => 'required',
                'role' => 'required|in:'.Role::Admin.','.Role::Searcher.','.Role::SuperAdmin,
            ],[
                'name.required' => 'Name wajib diisi!',
                'username.required' => 'Username wajib diisi!',
                'password.required' => 'Password wajib diisi!',
                'role.required' => 'Role wajib dipilih!',
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }
            $username1 = User::where('username',$request->username)->first();

            if ($username1) {
                $errors = $validator->errors();
                $errors->add('username', 'Username already exists');
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $user = new User;
            $user->name = $request->input('name');
            $user->username = $request->input('username');
            $user->password = Hash::make($request->input('password'));
            $user->role_id = Role::getRoleValue($request->input('role'));
            $user->save();

            $data = ['user'=>[
                'name'=> $user->name,
                'username'=> $user->username,
                'role'=> $request->input('role')
            ]];

            return responseJson('Register Successfully', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function refresh()
    {
        $token = JWTAuth::getToken();
        try {
            $newToken = JWTAuth::refresh($token);
            $data = ['new_token'=>$newToken];
            return responseJson('Refresh token successfully', 200, 'Success', $data);
        } catch (JWTException $e) {
            return responseJson('Could not refresh token', 500, 'Error');
        }
    }

    public function logout()
    {
        $token = JWTAuth::getToken();
        try {
            JWTAuth::invalidate($token);
            return responseJson('Successfully logged out', 200, 'Success');
        } catch (JWTException $e) {
            return responseJson('Token Signature could not be verified', 500, 'Error');
        }
    }
}
