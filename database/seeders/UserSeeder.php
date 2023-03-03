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
        $user = [
            [
                'name' => 'Admin',
                'NIK' => '3173082005030001',
                'telp' => '081213521066',
                'email' => 'admin@PeDe',
                'password' => bcrypt('12345'),
                'role' => 'admin', 
            ],
            [
                'name' => 'Petugas 1',
                'NIK' => '3173082004030001',
                'telp' => '081213521067',
                'email' => 'petugas1@PeDe',
                'password' => bcrypt('12345'),
                'role' => 'officer', 
            ],
            [
                'name' => 'Fattan',
                'NIK' => '3173082003030001',
                'telp' => '081213521068',
                'email' => 'fattan@PeDe',
                'password' => bcrypt('12345'),
                'role' => 'public', 
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
