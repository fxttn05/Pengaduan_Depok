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
        $user = $request->validate([
            'name' => 'required|string|max:25',
            'nik' => 'required|string|max:17|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6|string|confirmed',
            'telp' => 'nullable|max:100|string',
            'role' => 'required',
        ]);
        $this->user->create($user);

        $user['password'] = Hash::make($request->password);

        return view('dashboard.petugas.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $p = $this->user->find($id);
        return view('dashboard.petugas.update', [
            'petugas' => $p,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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

        return redirect(route('admin.petugas'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->user->find($id)->delete();

        return redirect()->back();
    }
}
