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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => Hash::make('123123123'),
        ]);
        
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'role' => 'user',
            'password' => Hash::make('123123123'),
        ]);
    }
}
