<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\PengaduanService;
use App\Services\TanggapanService;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PengaduanService $pengaduanService, ImageService $imageService, TanggapanService $tanggapanService)
    {
        $this->middleware('auth');
        $this->pengaduanService = $pengaduanService;
        $this->imageService = $imageService;
        $this->tanggapanService = $tanggapanService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'officer' || Auth::user()->role == 'admin') {
            $publicPengaduan = $this->pengaduanService->handleGetAllPublicPengaduan();
            $pengaduan = $this->pengaduanService->handleGetAllPengaduan();
            $pengaduans = $this->pengaduanService->handleGetAllPengaduanReport();
            $pengaduanV = $this->pengaduanService->handleGetAllPengaduanVerified();
            $pengaduanR = $this->pengaduanService->handleGetAllPengaduanReplied();
            $privatePengaduan =count($pengaduan) - count($publicPengaduan);
            return view('dashboard.dashboard', [
                'pengaduan' => $pengaduan,
                'publicPengaduan' => $publicPengaduan,
                'privatePengaduan' => $privatePengaduan,
                'pengaduans' => $pengaduans,
                'pengaduanV' => $pengaduanV,
                'pengaduanR' => $pengaduanR,
            ]);
        }
        
        if(Auth::user()->role == 'public'){

            $publicPengaduan = $this->pengaduanService->handleGetAllPublicPengaduan();
            $image = $this->imageService-> handleGetAllImage();
            return view('user.landingpage', [
                'publicPengaduan' => $publicPengaduan,
                'image' => $image,
            ]);

        }
    }

    public function profile(Request $request)
    {
        $pengaduan = $this->pengaduanService->handleGetAllPengaduan();
        $Pengaduans = $this->pengaduanService->handleGetAllPengaduanReport();
        $PengaduanV = $this->pengaduanService->handleGetAllPengaduanVerified();
        $PengaduanR = $this->pengaduanService->handleGetAllPengaduanReplied();
        return view('user.profile', [
            'pengaduan' => $pengaduan,
            'pengaduanReport' => $Pengaduans,
            'pengaduanVerified' => $PengaduanV,
            'pengaduanReplied' => $PengaduanR,
        ]);
    }
    
    public function profileEdit(Request $request, $id)
    {
        User::find($id)->update($request->all());
        return redirect()->back();
    }
        // if (Auth::user()->role == 'officer' || 'admin') {
        //     return view('layouts.app');
        // }

        // if (Auth::user()->role == 'admin') {
        //     $upcomingstudents = $this->studentService->handleGetUpcomingEndStudent();
        //     $students = $this->studentService->handleGetAllStudent($request);
        //     $supervisors = $this->supervisorService->handleGetAllSupervisor($request);
        //     $scores = $this->scoreService->handleGetAllScore();
        //     return view('master.dashboard', [
        //         'upcomingstudents' => $upcomingstudents,
        //         'students' => $students,
        //         'supervisors' => $supervisors,
        //         'scores' => $scores,
        //     ]);
        // }


}
