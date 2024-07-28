<?php

namespace App\Http\Controllers;

use App\Services\DocumentService;
use PDF;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\PengaduanService;
use App\Services\TanggapanService;

class PengaduanController extends Controller
{
    public function __construct(PengaduanService $pengaduanService, ImageService $imageService, TanggapanService $tanggapanService, DocumentService $documentService)
    {
        $this->pengaduanService = $pengaduanService;
        $this->imageService = $imageService;
        $this->tanggapanService = $tanggapanService;
        $this->documentService = $documentService;
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

    public function allList(Request $request)
    {
        $Pengaduan = $this->pengaduanService->handleGetAllPengaduanReport();
        $image = $this->imageService-> handleGetAllImage();
        return view('dashboard.pengaduan.indexReport', [
            'pengaduan' => $Pengaduan,
            'image' => $image,
        ]);

    }

    public function allListVerified(Request $request)
    {
        $Pengaduan = $this->pengaduanService->handleGetAllPengaduanVerified();
        $image = $this->imageService-> handleGetAllImage();
        return view('dashboard.pengaduan.indexVerified', [
            'pengaduan' => $Pengaduan,
            'image' => $image,
        ]);

    }

    public function allListReplied(Request $request)
    {
        $Pengaduan = $this->pengaduanService->handleGetAllPengaduanReplied();
        $image = $this->imageService-> handleGetAllImage();
        return view('dashboard.pengaduan.indexReplied', [
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
     * Show the form for creating a new PDF.
     */
    public function pdf($id)
    {
        $pengaduan = $this->pengaduanService->getPengaduanById($id);
        $image = $this->imageService-> handleGetAllImage();

        view()->share([
            'pengaduan' => $pengaduan,
            'image' => $image,
        ]);
        $pdf = PDF::loadview('export-pdf');
        // return view ('export-pdf');
        return $pdf->stream('pengaduan-'.$pengaduan->id.'-'.$pengaduan->user->nik.'.pdf');
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
        $document = $this->documentService->handleGetAllDocument();
        $tanggapan = $this->tanggapanService->handleGetTanggapanByPengaduan($id);
        
        return view('user.detail', [
            'pengaduan' => $pengaduan,
            'image' => $image,
            'tanggapan' => $tanggapan,
            'document' => $document
        ]);
    }

    public function detail($id)
    {
        $pengaduan = $this->pengaduanService->getPengaduanById($id);
        $image = $this->imageService-> handleGetAllImage();
        $document = $this->documentService->handleGetAllDocument();
        $tanggapan = $this->tanggapanService->handleGetTanggapanByPengaduan($id);
        return view('dashboard.pengaduan.detail', [
            'pengaduan' => $pengaduan,
            'image' => $image,
            'tanggapan' => $tanggapan,
            'document' => $document
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
