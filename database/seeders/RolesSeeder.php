<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
