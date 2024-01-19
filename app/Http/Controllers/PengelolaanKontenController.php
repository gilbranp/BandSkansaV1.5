<?php

namespace App\Http\Controllers;

use App\Models\PengelolaanKonten;
use Illuminate\Http\Request;

class PengelolaanKontenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengelolaans = PengelolaanKonten::orderBy('created_at', 'DESC')->get();
        return view("dashboard.pengelolaankonten", compact('pengelolaans'));
        
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
        if ($image = $request->file('img')) {
            $destinationPath = 'images/imggaleri/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }
        else{
            unset($input['img']);
        }
        
        PengelolaanKonten::create($input);

        return redirect()->route('admin-pengelolaankonten.index')->with('sukses', 'Data berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengelolaan = PengelolaanKonten::findOrFail($id);
        return view('dashboard.detailgaleri', compact('pengelolaan'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengelolaankonten = PengelolaanKonten::findOrFail($id);
        return view('dashboard.editgaleri', compact('pengelolaankonten'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengelolaankonten = PengelolaanKonten::findOrFail($id);

        $pengelolaankonten->update($request->all());

        return redirect()->route('admin-pengelolaankonten.index')->with('sukses', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengelolaans = PengelolaanKonten::findOrFail($id);
    
        // Menghapus gambar dari folder
        $gambarPath = public_path('images/imggaleri/' . $pengelolaans->img);
        if (file_exists($gambarPath)) {
            unlink($gambarPath); // Menghapus file gambar dari folder
        }
    
        $pengelolaans->delete(); // Menghapus entitas dari database
    
        return redirect()->route('admin-pengelolaankonten.index')->with('sukses', 'Data berhasil dihapus');
    }
    
    // public function lihat(string $id)
    // {
    //     $pengelolaan = PengelolaanKonten::findOrFail($id);
    //     return view('frontend.portfolio-details', compact('pengelolaan'));
        
        
    // }
    
}
