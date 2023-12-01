<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class superAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = User::create([
            'name' => 'Super Admin',
            'email' => 'ahdirmai@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $superadmin->assignRole('super-admin');
    }
}
