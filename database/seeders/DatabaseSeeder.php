<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Superadmin
        User::create([
            'name' => 'BUA Dev',
            'email' => 'superadmin@brightummah.com',
            'password' => Hash::make('password'),
            'role' => 'superadmin',
        ]);

        // Create Admin
        User::create([
            'name' => 'Bright Ummah Academy',
            'email' => 'admin1@brightummah.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
    }
}