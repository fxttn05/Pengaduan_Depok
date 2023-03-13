<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
}
