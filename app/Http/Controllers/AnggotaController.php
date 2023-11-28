<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = Anggota::orderBy('created_at', 'DESC')->get();
        return view("dashboard.anggota", compact('anggotas'));
        
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $input = $request->all();
        if ($image = $request->file('img')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }
        else{
            unset($input['img']);
        }
        
        Anggota::create($input);

        return redirect()->route('admin-anggota.index')->with('sukses', 'Data anggota berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('dashboard.detail', compact('anggota'));

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('dashboard.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggota = Anggota::findOrFail($id);

        $anggota->update($request->all());

        return redirect()->route('admin-anggota.index')->with('sukses', 'Data anggota berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     $anggota = Anggota::findOrFail($id);
    //     $anggota->delete();
    //     return redirect()->route('admin-anggota.index')->with('sukses', 'Data anggota berhasil dihapus');
    // }

    public function destroy(string $id)
{
    $anggota = Anggota::findOrFail($id);

    // Menghapus gambar dari folder
    $gambarPath = public_path('images/' . $anggota->img);
    if (file_exists($gambarPath)) {
        unlink($gambarPath); // Menghapus file gambar dari folder
    }

    $anggota->delete(); // Menghapus entitas dari database

    return redirect()->route('admin-anggota.index')->with('sukses', 'Data anggota berhasil dihapus');
}

    }

