<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Http\Requests\StoreGolonganRequest;
use App\Http\Requests\UpdateGolonganRequest;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listGol = Golongan::all();
        return view('dashboard.golongan.golongan', [
            "listGol" => $listGol,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.golongan.golongan_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Golongan::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect('/golongan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Golongan $golongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gol = Golongan::where("id", $id)->first();
        return view('dashboard.golongan.golongan_edit', [
            'gol' => $gol,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $gol = Golongan::where('id', $request->id)->first();

        $gol->kode = $request->kode_gol;
        $gol->nama = $request->nama_gol;
        $gol->save();

        return redirect('/golongan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id){
        $gol = Golongan::where("id", $id)->first();
        return view('dashboard.golongan.golongan_delete', [
            'gol' => $gol,
        ]);
    }

    public function destroy(Request $request)
    {
        $gol = Golongan::where("id", $request->id)->first();
        $gol->delete();

        return redirect('/golongan');
    }
}
