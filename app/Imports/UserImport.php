<?php
namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $role_id = $row['role_id'];
        $password = Hash::make($row['username'] . '1945');
        $name = $row['name'];
        $username = $row['username'];

        $user = new User([
            'role_id' => $role_id,
            'name' => $name,
            'username' => $username,
        ]);
        $user->password = $password;
        return $user;
    }
}
