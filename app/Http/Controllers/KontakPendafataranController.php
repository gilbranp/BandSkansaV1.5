<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\KontakPendaftaran;
use Illuminate\Http\Request;

class KontakPendafataranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesan = ContactMessage::orderBy('created_at', 'DESC')->get();
        return view("dashboard.kontakpendaftaran", compact('pesan'));
        
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
        ContactMessage::create($input);

        // return redirect()->route('admin-kontakpendafataran.index')->with('sukses', 'Data anggota berhasil diperbarui');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $pesan = ContactMessage::findOrFail($id);
        return view('dashboard.balasemail', compact('pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KontakPendaftaran $kontakPendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KontakPendaftaran $kontakPendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesan = ContactMessage::findOrFail($id);
        $pesan->delete(); // Menghapus entitas dari database

        return redirect()->route('admin-kontakpendafataran.index')->with('sukses', 'Data anggota berhasil dihapus');
    }
}
