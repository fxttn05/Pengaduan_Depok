<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\PengaduanService;
use App\Services\TanggapanService;

class TanggapanController extends Controller
{
    public function __construct(PengaduanService $pengaduanService, ImageService $imageService, TanggapanService $tanggapanService)
    {
        $this->pengaduanService = $pengaduanService;
        $this->imageService = $imageService;
        $this->tanggapanService = $tanggapanService;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pengaduan = $this->pengaduanService->getPengaduanById($id);
        $image = $this->imageService-> handleGetAllImage();
        $tanggapan = $this->tanggapanService->handleGetTanggapanByPengaduan($id);
        return view('dashboard.tanggapan.form', [
            'pengaduan' => $pengaduan,
            'image' => $image,
            'tanggapan' => $tanggapan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $this->tanggapanService->handlePostTanggapan($request, $id);
        return redirect()->route('admin.all.list.verified');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
