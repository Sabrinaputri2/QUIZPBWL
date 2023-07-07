<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Golongan;
use App\Models\User;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Requests\UpdatePelangganRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPelanggan = Pelanggan::all();
        return view('dashboard.pelanggan.pelanggan', [
            'listPelanggan' => $listPelanggan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $golongans = Golongan::all();
        $users = User::all();

        return view('dashboard.pelanggan.pelanggan_add', [
            'golongans' => $golongans,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            'pel_nama' => $request->nama,
            'pel_no' => $request->pel_no,
            'golongan_id' => $request->golongan_id,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'pel_aktif' => $request->pel_aktif,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pel = Pelanggan::where('id', $id)->first();
        return view('dashboard.pelanggan.pelanggan_detail', [
            'pel' => $pel,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pel = Pelanggan::where('id', $id)->first();
        $golongans = Golongan::all();
        $users = User::all();

        return view('dashboard.pelanggan.pelanggan_edit', [
            'pel' => $pel,
            'golongans' => $golongans,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pel = Pelanggan::where('id', $request->id)->first();

        $pel->pel_nama = $request->nama;
        $pel->pel_no = $request->pel_no;
        $pel->golongan_id = $request->golongan_id;
        $pel->pel_alamat = $request->pel_alamat;
        $pel->pel_hp = $request->pel_hp;
        $pel->pel_ktp = $request->pel_ktp;
        $pel->pel_seri = $request->pel_seri;
        $pel->pel_meteran = $request->pel_meteran;
        $pel->pel_aktif = $request->pel_aktif;
        $pel->user_id = Auth::user()->id;
        $pel->save();

        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id){
        $pel = Pelanggan::where('id', $id)->first();
        return view('dashboard.pelanggan.pelanggan_delete', [
            'pel' => $pel,
        ]);
    }

    public function destroy(Request $r)
    {
        $pel = Pelanggan::where('id', $r->id)->first()->delete();

        return redirect('/pelanggan');
    }
}
