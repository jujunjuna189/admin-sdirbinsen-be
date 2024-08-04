<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agama;
use App\Models\Permission;
use App\Models\Roles;
use App\Models\User;
use App\Models\UserPermission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Roles::create([
            'name' => 'Admin',
            'name_lower' => 'admin',
        ]);

        Roles::create([
            'name' => 'Searcher',
            'name_lower' => 'searcher',
        ]);

        Roles::create([
            'name' => 'Super Admin',
            'name_lower' => 'super_admin',
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role_id' => 1,
            'satuan_id' => null,
        ]);

        User::create([
            'name' => 'Searcher',
            'username' => 'searcher',
            'password' => Hash::make('searcher'),
            'role_id' => 2,
            'satuan_id' => null,
        ]);

        User::create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'password' => Hash::make('superadmin'),
            'role_id' => 3,
            'satuan_id' => null,
        ]);

        // Permission
        Permission::create([
            'display' => 'Setting',
            'key' => 'setting.menu'
        ]);

        Permission::create([
            'display' => 'Menu Trakorps',
            'key' => 'trakorps.menu'
        ]);

        Permission::create([
            'display' => 'Tambah Trakorps',
            'key' => 'trakorps.create'
        ]);

        Permission::create([
            'display' => 'Update Trakorps',
            'key' => 'trakorps.update'
        ]);

        Permission::create([
            'display' => 'Delete Trakorps',
            'key' => 'trakorps.delete'
        ]);

        Permission::create([
            'display' => 'Menu Binman',
            'key' => 'binman.menu'
        ]);

        Permission::create([
            'display' => 'Tambah Binman',
            'key' => 'binman.create'
        ]);

        Permission::create([
            'display' => 'Update Binman',
            'key' => 'binman.update'
        ]);

        Permission::create([
            'display' => 'Delete Binman',
            'key' => 'binman.delete'
        ]);

        Permission::create([
            'display' => 'Menu Binmat',
            'key' => 'binmat.menu'
        ]);

        Permission::create([
            'display' => 'Tambah Binmat',
            'key' => 'binmat.create'
        ]);

        Permission::create([
            'display' => 'Update Binmat',
            'key' => 'binmat.update'
        ]);

        Permission::create([
            'display' => 'Delete Binmat',
            'key' => 'binmat.delete'
        ]);

        Permission::create([
            'display' => 'Menu Pengguna',
            'key' => 'pengguna.menu'
        ]);

        Permission::create([
            'display' => 'Tambah Pengguna',
            'key' => 'pengguna.create'
        ]);

        Permission::create([
            'display' => 'Update Pengguna',
            'key' => 'pengguna.update'
        ]);

        Permission::create([
            'display' => 'Delete Pengguna',
            'key' => 'pengguna.delete'
        ]);

        Permission::create([
            'display' => 'Menu Siapsat',
            'key' => 'siapsat.menu'
        ]);

        Permission::create([
            'display' => 'Tambah Siapsat',
            'key' => 'siapsat.create'
        ]);

        Permission::create([
            'display' => 'Update Siapsat',
            'key' => 'siapsat.update'
        ]);

        Permission::create([
            'display' => 'Delete Siapsat',
            'key' => 'siapsat.delete'
        ]);

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

        // Agama
        Agama::create([
            'nama' => 'Islam',
        ]);

        Agama::create([
            'nama' => 'Protestan',
        ]);

        Agama::create([
            'nama' => 'Katolik',
        ]);

        Agama::create([
            'nama' => 'Hindu',
        ]);

        Agama::create([
            'nama' => 'Buddha',
        ]);

        Agama::create([
            'nama' => 'Konghucu',
        ]);
    }
}
