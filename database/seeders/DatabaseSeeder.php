<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Urutan penting: peran dulu, baru pengguna
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
        ]);
    }
}