<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        Permission::create([
            'display' => 'Lihat Searcher Data',
            'key' => 'view.searcher'
        ]);

        Permission::create([
            'display' => 'Lihat Buku Pintar',
            'key' => 'view.learning'
        ]);
    }
}
