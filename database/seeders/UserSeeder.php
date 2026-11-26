<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admins = [
            Role::ADMIN_OPERASIONAL => ['name' => 'Admin Operasional', 'email' => 'operasional@jamukita.test'],
            Role::ADMIN_PEMBUKUAN => ['name' => 'Admin Pembukuan', 'email' => 'pembukuan@jamukita.test'],
        ];

        foreach ($admins as $slug => $admin) {
            User::firstOrCreate(
                ['email' => $admin['email']],
                [
                    'name' => $admin['name'],
                    'password' => 'password',
                    'role_id' => Role::where('slug', $slug)->firstOrFail()->id,
                ],
            );
        }

        // Akun pembeli untuk uji coba (tanpa peran)
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User', 'password' => 'password'],
        );
    }
}