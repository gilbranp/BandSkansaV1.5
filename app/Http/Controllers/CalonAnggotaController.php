<?php

namespace App\Http\Controllers;

use App\Models\CalonAnggota;
use Illuminate\Http\Request;

class CalonAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $calonanggota = CalonAnggota::orderBy('created_at', 'DESC')->get();
        return view('dashboard.calonanggota.index',compact('calonanggota'));
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
        $input = $request->all();
        CalonAnggota::create($input);
        return redirect('/pendaftaran')->with('sukses','Formulir berhasil dikirimkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(CalonAnggota $calonAnggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalonAnggota $calonAnggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CalonAnggota $calonAnggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $calonanggota = CalonAnggota::findOrFail($id);
        $calonanggota->delete(); // Menghapus entitas dari database
        return redirect()->route('admin-calonanggota.index')->with('sukses', 'Data calon anggota berhasil dihapus');
    }
}
