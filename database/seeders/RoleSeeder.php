<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            Role::ADMIN_OPERASIONAL => 'Admin Operasional',
            Role::ADMIN_PEMBUKUAN => 'Admin Pembukuan',
        ];

        foreach ($roles as $slug => $name) {
            Role::updateOrCreate(['slug' => $slug], ['name' => $name]);
        }
    }
}