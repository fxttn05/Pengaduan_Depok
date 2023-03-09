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
    
    public function handleGetAllPengaduan()
    {
        $p = $this->pengaduan->sortByDesc('pengadaun_date')->get();
        return $p;
    }

    public function handleGetAllPublicPengaduan()
    {
        // dd($this->pengaduan->where('is_public', 1)->orderBy('created_at', 'desc')->get());
        $p = $this->pengaduan->where('is_public', 1)->orderBy('created_at', 'desc')->get();
        return $p;  
    }

    public function getPengaduanById($id){
        $p = $this->pengaduan->find($id);
        return $p;  
    }

    public function handlePostPengaduan($request)
    {
        // dd($request->pengaduan_date);
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
            'pengaduan_date' => $request->pengaduan_date ,
            'status' => 'report',
            'is_public' => $request->is_public,
        ]);

        foreach($request->file('image') as $image) {
            $file = str_replace(' ','_',$image->getClientOriginalName());
            $filename = Carbon::now()->format('Hisdmy').'_'.$file;
            $image->move(public_path('image'), $filename);
            $this->image->create([
                'pengaduan_id' => $pengaduan->id,
                'image' => $filename
            ]);
        }

        return 'ok';
    }
}