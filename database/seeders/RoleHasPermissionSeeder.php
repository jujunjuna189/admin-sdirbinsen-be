<?php

namespace Database\Seeders;

use App\Models\RoleHasPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // role has permission
        // Admin
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 2]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 3]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 4]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 5]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 6]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 7]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 8]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 9]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 10]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 11]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 12]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 13]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 14]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 15]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 16]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 17]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 18]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 19]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 20]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 21]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 22]);
        RoleHasPermission::create(['role_id' => 1, 'permission_id' => 23]);

        // searcher
        RoleHasPermission::create(['role_id' => 2, 'permission_id' => 22]);
        RoleHasPermission::create(['role_id' => 2, 'permission_id' => 23]);

        // superadmin
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 1]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 2]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 3]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 4]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 5]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 6]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 7]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 8]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 9]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 10]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 11]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 12]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 13]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 14]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 15]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 16]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 17]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 18]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 19]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 20]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 21]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 22]);
        RoleHasPermission::create(['role_id' => 3, 'permission_id' => 23]);
    }
}
