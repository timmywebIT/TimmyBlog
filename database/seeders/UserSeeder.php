<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Главный Админ',
            'email' => 'admin@example.com',
            'password' => Hash::make('secret123'),
            'role' => User::ROLE_ADMIN,
        ]);

        User::create([
            'name' => 'Просто читатель',
            'email' => 'reader@example.com',
            'password' => Hash::make('reader123'),
            'role' => User::ROLE_USER,
        ]);
    }
}
