<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Enums\Role;
use App\Exports\UserExport;
use App\Http\Controllers\Controller;
use App\Imports\UserImport;
use App\Models\Chat;
use App\Models\User;
use App\Models\UserPermission;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = User::query()->with(['role', 'satuan']);

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%")
                        ->orWhere('username', 'like', "%$search%");
                });
            }

            $not_id = $request->input('not_id');
            if (!empty($not_id)) {
                $query->whereNotIn('id', json_decode($not_id, true));
            }

            // Apply filtering by created_at
            $role_id = $request->input('role_id');
            if (!empty($role_id)) {
                $query->where('role_id', $role_id);
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $user = $query->paginate($perPage);

            $data = [
                'user' => $user
            ];

            return responseJson('All user', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function fromChat(Request $request)
    {
        try {
            $perPage = $request->input('per_page', 30);
            $chat_user = Chat::where('from_id', $request->id)->groupBy('to_id')->orderBy('id', 'desc')->take($perPage)->pluck('to_id');
            $user = User::whereIn('id', $chat_user)->paginate($perPage);
            $user = $user->toArray();
            foreach ($user['data'] as $index => $val) {
                $last_message = Chat::where(function ($query) use ($request, $val) {
                    $query->where('from_id', $request->id)
                        ->where('to_id', $val['id']);
                })->orWhere(function ($query) use ($request, $val) {
                    $query->where('from_id', $val['id'])
                        ->where('to_id', $request->id);
                })->orderBy('id', 'desc')->first();
                $user['data'][$index] = (object)[...$val, 'last_message' => $last_message->message ?? 'Dokumen...'];
            }

            $data = [
                'user' => $user
            ];

            return responseJson('User from chat', 200, 'Success', $data);
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
                'username' => 'required|min:4|max:100|regex:/^[a-zA-Z0-9_]{4,100}$/',
                'password' => 'required|min:8|max:128',
                'role' => 'required|in:' . Role::Admin . ',' . Role::Searcher,
                'satuan_id' => 'nullable',
            ], [
                'name.required' => 'Name wajib diisi!',
                'username.required' => 'Username wajib diisi!',
                'username.min' => 'Minimal username adalah 4 karakter!',
                'username.max' => 'Maksimal username adalah 20 karakter!',
                'username.regex' => 'Username hanya tulisan, nomor dan underscores.',
                'password.required' => 'Password wajib diisi!',
                'password.min' => 'Minimal password adalah 8 karakter!',
                'password.max' => 'Maksimal password adalah 128 karakter!',
                'role.required' => 'Level pengguna wajib dipilih!',
                'role.in' => 'Pilihan level pengguna tidak valid! Harus Admin dan Searcher!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }
            $username = User::where('username', $request->username)->first();

            if ($username) {
                $errors = $validator->errors();
                $errors->add('username', 'Username telah digunakan');
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $user = new User;
            $user->name = $request->input('name');
            $user->username = $request->input('username');
            $user->role_id = Role::getRoleValue($request->input('role'));
            $user->password = Hash::make($request->input('password'));
            $user->satuan_id = $request->input('satuan_id');
            $user->save();

            // foreach ($request->permission_id as $permit) {
            //     $userPermission = new UserPermission();
            //     $userPermission->user_id = $user->id;
            //     $userPermission->permission_id = $permit;

            //     $userPermission->save();
            // }

            $data = [
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'username' => $user->username,
                    'role' => $request->input('role'),
                    'satuan_id' => $user->satuan_id
                ]
            ];

            return responseJson('Add user', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $user = User::with(['role', 'satuan'])
                ->where('id', $id)->first();
            if (!$user) {
                return responseJson('Data not found', 404, 'Error');
            }
            $user = [
                'id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'satuan_id' => $user->satuan_id,
                'satuan_name' => $user->satuan->nama ?? '',
                'role_id' => $user->role_id,
                'role_name' => $user->role->name ?? '',
                'role_lower_name' => $user->role->lower_name ?? '',
            ];

            $userPermission = UserPermission::where('user_id', $id)->with('permission')->get();

            $permission = [];
            foreach ($userPermission as $permit) {
                $permission[$permit->permission->key] = true;
            }
            $data = [
                'user' => $user,
                'permission' => $permission
            ];
            return responseJson('Show user', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $user = User::query()
                ->join('roles', 'users.role_id', '=', 'roles.id')
                ->select('users.*', 'roles.name as role_name')
                ->where('users.id', $id)
                ->first();
            if (!$user) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'role' => 'required|in:' . Role::Admin . ',' . Role::Searcher,
                // 'permission_id' => 'required|array',
            ], [
                'name.required' => 'Name wajib diisi!',
                'role.required' => 'Level pengguna wajib dipilih!',
                'role.in' => 'Pilihan level pengguna tidak valid! Harus Admin dan Searcher!',
                // 'permission_id.required' => 'Permission id wajib diisi!',
                // 'permission_id.array' => 'Format permission tidak sesuai!'
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // $userPermission = UserPermission::where('user_id', $id)->delete();
            // if (is_null($userPermission)) {
            //     return responseJson('user permission not found', 404, 'Error');
            // }

            // foreach ($request->permission_id as $permit) {
            //     $userPermission = new UserPermission();
            //     $userPermission->user_id = $user->id;
            //     $userPermission->permission_id = $permit;

            //     $userPermission->save();
            // }

            // Update the user data
            $user->name = $request->name;
            $user->username = $request->username;
            $user->role_id = Role::getRoleValue($request->input('role'));
            $user->save();
            $data = [
                'user' => $user
            ];

            return responseJson('Update user', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function updatePassword(Request $request, $id)
    {
        try {
            $user = User::query()
                ->join('roles', 'users.role_id', '=', 'roles.id')
                ->select('users.*', 'roles.name as role_name')
                ->where('users.id', $id)
                ->first();

            if (!$user) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'new_password' => 'required|min:8|max:128|alpha_num',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }
            // Update the user data
            $user->password = Hash::make($request->new_password);
            $user->save();
            $data = [
                'user' => $user
            ];

            return responseJson('Update password user', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::find($id);
            $user_data = User::query()
                ->join('roles', 'users.role_id', '=', 'roles.id')
                ->select('users.*', 'roles.name as role_name')
                ->where('users.id', $id)
                ->first();
            if (!$user) {
                return responseJson('Data not found', 404, 'Error');
            }
            $user->delete();
            $data = [
                'user' => $user_data
            ];
            return responseJson('Delete user', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function exportExcel(Request $request)
    {
        // Mendapatkan data Personil
        $users = User::all();

        // Menambahkan kolom 'Jumlah Tahun' dan 'Jumlah Sisa Bulan'
        $users = $users->map(function ($user) {
            $startAt = new DateTime($user->startAt);
            $user->newStartAt = $startAt->format('d-M-Y H:i:s');
            return $user;
        });
        $users = $users->map(function ($user) {
            unset($user->created_at);
            unset($user->updated_at);
            return $user;
        });

        // Mengekspor data ke dalam format Excel
        return Excel::download(new UserExport($users), 'user.xlsx');
    }
    public function importExcel(Request $request)
    {
        // Validate the updated data
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xls,xlsx',
        ]);
        if ($validator->fails()) {
            return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
        }

        $file = $request->file('file');

        try {
            Excel::import(new UserImport, $file);

            return response()->json([
                'message' => 'Data imported successfully',
                'status' => 'Success',
                'list_data' => []
            ], 200);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}
