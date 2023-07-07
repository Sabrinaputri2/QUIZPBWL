<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.main_dashboard', [
            "userName" => Auth::user()->name,
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('dashboard.user.user_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'pos' => $request->posisi,
            'role' => $request->role,
            'user_aktif' => $request->status
        ]);

        return redirect("/user");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('dashboard.user.user_edit', [
            "user" => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->no_hp = $request->no_hp;
        $user->pos = $request->posisi;
        $user->role = $request->role;
        $user->user_aktif = $request->status;
        $user->save();

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $user = User::where('id', $id)->first();

        return view('dashboard.user.user_delete', [
            "user" => $user,
        ]);
    }

    public function destroy(Request $request)
    {
        $user = User::where('id', $request->id);
        $user->delete();

        return redirect('/user');
    }

    public function listUser(){
        return view('dashboard.user.user', [
            "listUser" => User::all(),
        ]);
    }
}
