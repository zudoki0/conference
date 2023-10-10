<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'email' => 'johndoe@gmail.com',
            'username' => 'John Doe',
            'password' => Hash::make('Pass2023!'),
        ]);
    }
}
