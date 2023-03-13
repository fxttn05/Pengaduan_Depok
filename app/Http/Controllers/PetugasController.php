<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(){
        $p = $this->user->where('role', 'officer')->orWhere('role', 'admin')->get();
        return view('dashboard.petugas.index', [
            'petugas' => $p
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $user = $request->validate([
        //     'name' => 'required|string|max:25',
        //     'nik' => 'required|string|max:17|unique:users',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|mini:6|string|confirmed',
        //     'role' => 'required',
        // ]);
        $this->user->create([
            'name' => $request->name,
            'nik' => $request->nik,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
    }
}
