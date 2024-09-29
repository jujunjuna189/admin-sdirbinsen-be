<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AgamaSeeder::class,
            RolesSeeder::class,
            PermissionsSeeder::class,
            RoleHasPermissionSeeder::class,
            UsersSeeder::class,
            UserPermissionSeeder::class,
        ]);
    }
}
