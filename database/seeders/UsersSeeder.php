<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
