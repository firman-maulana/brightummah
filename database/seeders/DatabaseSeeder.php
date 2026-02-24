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
            'password' => Hash::make('superadminbua'),
            'role' => 'superadmin',
        ]);

    }
}