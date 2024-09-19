<?php

namespace App\Http\Controllers;

use App\Models\Barang_Masuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model barang
        $hasil=Barang_Masuk::all();
        //cek isi variabel $hasil
        //dd($hasil);
        return view('Barang_Masuk.index')->with('hasil',$hasil);

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
    public function show(Barang_Masuk $barang_Masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang_Masuk $barang_Masuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang_Masuk $barang_Masuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang_Masuk $barang_Masuk)
    {
        //
    }
}
