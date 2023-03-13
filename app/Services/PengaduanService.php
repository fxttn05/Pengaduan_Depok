<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\{
    Document,
    Pengaduan,
    Image
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class PengaduanService
{
    public function __construct(Pengaduan $pengaduan, Image $image, Document $document)
    {
        $this->pengaduan = $pengaduan;
        $this->image = $image;
        $this->document = $document;
    }

    public function handleGetAllPengaduan()
    {
        $p = $this->pengaduan->orderBy('status', 'desc')->orderBy('created_at')->get();
        return $p;  
    }

    public function handleGetAllPengaduanReport()
    {
        $p = $this->pengaduan->where('status', '1.report')->orderBy('created_at')->get();
        return $p;  
    }

    public function handleGetAllPengaduanVerified()
    {
        // dd($this->pengaduan->where('is_public', 1)->orderBy('created_at', 'desc')->get());
        $p = $this->pengaduan->where('status', '2.verified')->orderBy('created_at')->get();
        return $p;  
    }
    public function handleGetAllPengaduanReplied()
    {
        // dd($this->pengaduan->where('is_public', 1)->orderBy('created_at', 'desc')->get());
        $p = $this->pengaduan->where('status', '3.replied')->orderBy('created_at')->get();
        return $p;  
    }
    
    // percobaan
    // public function handleGetAllRequestPengaduan($request)
    // {
    //     $param_show_report = $request->input('show_1.report');
    //     $param_show_verified = $request->input('show_2.verified');
    //     $param_show_replied = $request->input('show_3.replied');
        
    //     if ($param_show_report == 'true') {
    //         $show_report = '1.report';
    //     } else {
    //         $show_report = null;
    //     }
    //     if ($param_show_verified == 'true') {
    //         $show_verified = '2.verified';
    //     } else {
    //         $show_verified = null;
    //     }
    //     if ($param_show_replied == 'true') {
    //         $show_replied = '3.replied';
    //     } else {
    //         $show_replied = null;
    //     }

    //     if ($show_report == null && $show_verified == null && $show_replied == null) {
    //         $show_report = '1.report';
    //         $show_verified = '2.verified';
    //         $show_replied = '3.replied';
    //     }
        
    //     $status_type = [$show_report, $show_verified, $show_replied];

    //     if($status_type)
    //     {
    //         $p = $this->pengaduan->orderBy('status')->orderBy('created_at', 'desc')->when($status_type, function ($query, $status_type){
    //             return $query->whereIn('status', $status_type);
    //         })->get();
    //     }else{
    //         $p = $this->pengaduan->orderBy('status')->orderBy('created_at', 'desc')->get();
    //     }
    //     return $p;
    // }

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

    public function handlePutStatusToVerified($id)
    {
        $pengaduan = $this->pengaduan->find($id)->update([
            'status' => '2.verified'
        ]);
        // dd($pengaduan);
        return $pengaduan;
    }
}