<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Services\PengaduanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PengaduanService $pengaduanService)
    {
        $this->middleware('auth');
        $this->pengaduanService = $pengaduanService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'officer' || 'admin') {
            //     return view('layouts.app');
        }
        
        if(Auth::user()->role == 'public'){

            $publicPengaduan = $this->pengaduanService->handleGetAllPublicPengaduan();
            return view('user.landingpage', [
                'publicPengaduan' => $publicPengaduan,
            ]);

        }
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
