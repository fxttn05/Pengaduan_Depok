<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\PengaduanService;
use App\Services\TanggapanService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PengaduanService $pengaduanService, ImageService $imageService, TanggapanService $tanggapanService, User $user)
    {
        $this->middleware('auth');
        $this->pengaduanService = $pengaduanService;
        $this->imageService = $imageService;
        $this->tanggapanService = $tanggapanService;
        $this->user = $user;
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
            $privatePengaduan = $this->pengaduanService->handleGetPrivatePengaduan();
            $image = $this->imageService-> handleGetAllImage();
            return view('user.landingpage', [
                'publicPengaduan' => $publicPengaduan,
                'privatePengaduan' => $privatePengaduan,
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
        $user = $request->validate([
            'name' => 'required|string|max:100',
            'nik' => 'required|string|max:17',
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:6|string',
            'telp' => 'nullable|max:100|string'
        ]);
        $this->user->find($id)->update($user);

        $user['telp'] = $request->telp;
        $user['password'] = Hash::make($request->password);

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
