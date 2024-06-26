<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'BMA',
            'email' => 'bma@ciputra.ac.id',
            'email_verified_at' => now(),
            'nim'=> 'BMACiputra2024',
            'role'=> 'admin',
            'remember_token' => Str::random(10),
        ]);
    }
}
