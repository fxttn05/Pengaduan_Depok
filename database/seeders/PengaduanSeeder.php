<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $is_public = [1, 0];
        $user_id = [3, 4, 5, 6];
        // $status = ['1.report', '2.verified', '3.replied'];
        foreach (range(1,5) as $number) {
            $sub[] = $number; 
        }
        $judul = ['Terjadi sebuah kerusakan jalan', 'Sampah menumpuk di bahu jalan', 'Tiang lampu hampir rubuh', 'terjadi kerusuhan di gang sempit','tetangga terlalu berisik saat malam hari', 'aktivitas tidak wajar dilakukan sekelompok orang di daerah A','merusak fasilitas umum','tabrakan terjadi di jalan raya A', 'Pembuatan KTP yang begitu lama', 'Anak hilang', 'Kehilangan dompet di daerah A', 'Motor hilang di daerah A', 'orang terperosok ke dalam saluran air', 'angkot ugal ugalan', 'balap liar'];
        
        for($i= 1; $i <=250; $i++)
        {
            Pengaduan::create([
                'id' => $i,
                'user_id' => $user_id[array_rand($user_id)],
                'judul' => $judul[array_rand($judul)],
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare venenatis nibh eu varius. Fusce non orci id ligula tincidunt ultrices. In hac habitasse platea dictumst. Pellentesque tempus justo ac lorem malesuada egestas. Suspendisse vel sodales odio, a consectetur urna. consectetur adipiscing elit. Aenean ornare venenatis nibh eu varius. Fusce non orci id ligula tincidunt ultrices. In hac habitasse platea dictumst. Pellentesque tempus justo ac lorem malesuada egestas. Suspendisse vel sodales odio, a consectetur urna.',
                'category' => 'contoh laporan',
                'pengaduan_date' => Carbon::now()->subDays($sub[array_rand($sub)])->format('Y-m-d'),
                // 'status' => $status[array_rand($status)],
                'status' => '1.report',
                'is_public' => $is_public[array_rand($is_public)],
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
