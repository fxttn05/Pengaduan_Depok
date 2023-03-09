<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use App\Services\PengaduanService;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function __construct(PengaduanService $pengaduanService, ImageService $imageService)
    {
        $this->pengaduanService = $pengaduanService;
        $this->imageService = $imageService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicPengaduan = $this->pengaduanService->handleGetAllPublicPengaduan();
        return view('user.landingpage', [
            'publicPengaduan' => $publicPengaduan,
        ]);
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
        $image = $this->imageService->handleGetAllImage();
        return view('user.detail', [
            'pengaduan' => $pengaduan,
            'image' => $image,
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
