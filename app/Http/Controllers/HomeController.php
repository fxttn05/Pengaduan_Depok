<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            return view('user.landingpage');
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
