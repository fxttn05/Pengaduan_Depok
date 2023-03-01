<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'NIK' => '3173082005030001',
            'telp' => '081213521066',
            'email' => 'admin@PeDe',
            'password' => bcrypt('12345'),
            'role' => 'admin',
        ]);
    }
}
