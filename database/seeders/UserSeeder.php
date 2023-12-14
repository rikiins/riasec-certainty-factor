<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin Aplikasi',
                'role_id' => 1,
                'username' => 'admin',
                'password' => Hash::make(12345)
            ],
            [
                'name' => 'Lorem Ipsum',
                'role_id' => 2,
                'username' => 'lipsum',
                'password' => Hash::make(12345)
            ]
        ]);
    }
}
