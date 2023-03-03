<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\{
    Pengaduan,
    Image
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class PengaduanService
{
    public function __construct(Pengaduan $pengaduan, Image $image)
    {
        $this->pengaduan = $pengaduan;
        $this->image = $image;
    }
    
    public function handleGetAllpengaduan()
    {
    }

    public function handlePostPengaduan($request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'category' => 'required',
            'pengaduan_date' => 'required',
            'is_public' => 'required',
        ]);

        $pengaduan = $this->pengaduan->create([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'isi' => $request->isi,
            'category' => $request->category,
            'pengaduan_date' => $request->pengaduan_date,
            'status' => 'report',
            'is_public' => $request->is_public,
        ]);

        foreach($request->file('image') as $image) {
            $file = str_replace(' ','-',$image->getClientOriginalName());
            $filename = Carbon::now()->format('Hisdmy').'_'.$file;
            $image->move(public_path('img'), $filename);
            $this->images->create([
                'pengaduan_id' => $pengaduan->id,
                'image' => $filename
            ]);
        }

        return 'ok';
    }
}