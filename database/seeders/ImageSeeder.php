<?php

namespace Database\Seeders;

use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user_id = [1, 2, 3, 4, 5, 7, 8, 9, 11, 12, 14, 15, 17, 19, 20, 23, 26, 29, 30];
        for($i= 1; $i <=40; $i++){
            Image::create([
                'id' => $i,
                'pengaduan_id' => $user_id[array_rand($user_id)],
                'image' => 'example_image.png',
                'created_at' => Carbon::now(),
            ]);
        }
        
    }
}
