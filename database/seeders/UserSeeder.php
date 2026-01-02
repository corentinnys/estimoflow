<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Utilisateur admin
       /*  User::create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id'=>1,
            'picture'=>'admin.jpg'
        ]); */

        // Utilisateurs fake
        User::factory(5)->create();
    }
}
