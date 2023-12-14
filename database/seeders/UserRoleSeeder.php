<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::insert([
            [
                'role' => 'Admin',
            ],
            [
                'role' => 'User',
            ]
        ]);
    }
}
