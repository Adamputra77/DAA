<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        // Buat role jika belum ada
        Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'penjual', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'pembeli', 'guard_name' => 'web']);
    }
}
