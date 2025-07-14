<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {

        User::create([
            'name' => 'Regular User1',
            'email' => 'omar.f.cesarin28@gmail.com',
            'password' => Hash::make('Omar2004'),
            'role' => 'user'
        ]);
    }
}
