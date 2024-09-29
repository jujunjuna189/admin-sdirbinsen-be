<?php

namespace Database\Seeders;

use App\Models\UserPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User permission
        UserPermission::create([
            'user_id' => 3,
            'permission_id' => 1,
        ]);

        UserPermission::create([
            'user_id' => 3,
            'permission_id' => 14,
        ]);

        UserPermission::create([
            'user_id' => 3,
            'permission_id' => 16,
        ]);
    }
}
