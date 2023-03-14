<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $p = $this->user->where('role', 'public')->get();
        return view('dashboard.masyarakat.index', [
            'masyarakat' => $p
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $p = $this->user->find($id);
        return view('dashboard.masyarakat.update', [
            'masyarakat' => $p,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        return redirect(route('admin.masyarakat'));
    }

}
