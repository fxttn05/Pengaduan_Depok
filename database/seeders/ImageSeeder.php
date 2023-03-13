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
        $pengaduan_id = range(1, 400);
        for($i= 1; $i <=550; $i++){
            Image::create([
                'id' => $i,
                'pengaduan_id' => $pengaduan_id[array_rand($pengaduan_id)],
                'image' => 'example_image.png',
                'created_at' => Carbon::now(),
            ]);
        }
        
    }
}
