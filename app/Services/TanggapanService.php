<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\{
    Image,
    Tanggapan, 
    Pengaduan,
    Document
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class TanggapanService
{
    public function __construct(Tanggapan $tanggapan, Pengaduan $pengaduan, Image $image, Document $document)
    {
        $this->tanggapan = $tanggapan;
        $this->pengaduan =  $pengaduan;
        $this->image =  $image;
        $this->document = $document;
    }


    public function handleGetTanggapanByPengaduan($id){
        $p = $this->tanggapan->where('pengaduan_id', $id)->get();
        return $p;  
    }

    public function handlePostTanggapan($request, $id)
    {
        // dd($request->tanggapan);

        $tanggapan = $this->tanggapan->create([
            'user_id' => Auth::id(),
            'pengaduan_id' => $id,
            'tanggapan' => $request->tanggapan,
            'tanggapan_date' => Carbon::now()->format('Y-m-d'),
            'image[]' => 'nullable|png,jpg,jpeg|max:5000',
            'document[]' => 'nullable|pdf|max:10000'
        ]);

        $this->pengaduan->find($id)->update([
            'status' => '3.replied'
        ]);

        foreach($request->file('image') as $image) {
            $file = str_replace(' ','_',$image->getClientOriginalName());
            $filename = Carbon::now()->format('Hisdmy').'_'.$file;
            $image->move(public_path('image'), $filename);
            $this->image->create([
                'tanggapan_id' => $tanggapan->id,
                'image' => $filename,
                'type' => 'tanggapan'
            ]);
        }

        foreach($request->file('document') as $document) {
            $file = str_replace(' ','_',$document->getClientOriginalName());
            $filename = Carbon::now()->format('Hisdmy').'_'.$file;
            $document->move(public_path('document'), $filename);
            $this->document->create([
                'tanggapan_id' => $tanggapan->id,
                'document' => $filename
            ]);
        }
    }
}