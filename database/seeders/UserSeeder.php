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
                'email' => 'admin@pede',
                'password' => bcrypt('12345'),
                'role' => 'admin', 
            ],
            [
                'name' => 'Petugas 1',
                'NIK' => '3173082004030001',
                'telp' => '081213521067',
                'email' => 'petugas1@pede',
                'password' => bcrypt('12345'),
                'role' => 'officer', 
            ],
            [
                'name' => 'Fattan',
                'NIK' => '3173082003030001',
                'telp' => '081213521068',
                'email' => 'fattan@pede',
                'password' => bcrypt('12345'),
                'role' => 'public', 
            ],
            // [
            //     'name' => 'Dina',
            //     'NIK' => '3173082003030002',
            //     'telp' => '081213521068',
            //     'email' => 'dina@pede',
            //     'password' => bcrypt('12345'),
            //     'role' => 'public', 
            // ],
            [
                'name' => 'masyarakat1',
                'NIK' => '318309200406001',
                'telp' => '081213521000',
                'email' => 'masyarakat1@pede',
                'password' => bcrypt('12345'),
                'role' => 'public', 
            ],
            [
                'name' => 'masyarakat2',
                'NIK' => '3183092004060002',
                'telp' => '081213521001',
                'email' => 'masyarkat@pede',
                'password' => bcrypt('12345'),
                'role' => 'public', 
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
