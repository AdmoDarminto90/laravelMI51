<?php

namespace App\Http\Controllers;

use App\Models\DitelBarang_Masuk;
use Illuminate\Http\Request;

class DitelBarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model barang
        $hasil=ditel_barang__masuk::all();
        //cek isi variabel $hasil
        //dd($hasil);
        return view('ditel_barang__masuk.index')->with('hasil',$hasil);

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
    public function show(DitelBarang_Masuk $ditelBarang_Masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DitelBarang_Masuk $ditelBarang_Masuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DitelBarang_Masuk $ditelBarang_Masuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DitelBarang_Masuk $ditelBarang_Masuk)
    {
        //
    }
}
