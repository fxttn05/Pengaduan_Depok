<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\PengaduanService;
use App\Services\TanggapanService;

class PengaduanController extends Controller
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
        $publicPengaduan = $this->pengaduanService->handleGetAllPublicPengaduan();
        $image = $this->imageService-> handleGetAllImage();
        return view('user.landingpage', [
            'publicPengaduan' => $publicPengaduan,
            'image' => $image,
        ]);
    }

    public function allList()
    {
        $Pengaduan = $this->pengaduanService->handleGetAllPengaduan();
        $image = $this->imageService-> handleGetAllImage();
        return view('dashboard.pengaduan.index', [
            'pengaduan' => $Pengaduan,
            'image' => $image,
        ]);

    }

    public function verified($id)
    {
        $this->pengaduanService-> handlePutStatusToVerified($id);
        return redirect()->back();
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
        $this->pengaduanService->handlePostPengaduan($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pengaduan = $this->pengaduanService->getPengaduanById($id);
        $image = $this->imageService-> handleGetAllImage();
        $tanggapan = $this->tanggapanService->handleGetTanggapanByPengaduan($id);
        return view('user.detail', [
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
