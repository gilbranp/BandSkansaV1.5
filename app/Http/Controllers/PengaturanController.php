<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaturans = Pengaturan::orderBy('created_at', 'DESC')->get();
        return view("dashboard.pengaturan", compact('pengaturans'));
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
    public function show()
    {
    //     $pengaturan = Pengaturan::find(1); // Mengambil data dengan ID 1
    //     @dd($pengaturan);
    // return view('frontend.index', compact('pengaturan'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
        
            $pengaturans = Pengaturan::findOrFail($id);
            return view('dashboard.pengaturan', compact('pengaturans'));
    }

    /**
     * Update the specified resource in storage.
     */



    //  public function update(Request $request, string $id)
    // {
    //     $pengaturan = Pengaturan::findOrFail($id);

    //     $pengaturan->update($request->all());

    //     return redirect()->route('admin-pengaturan.index')->with('sukses', 'Data pengaturan berhasil diperbarui');
    // }



    public function update(Request $request, string $id)
    {
        // Ambil data pengaturan dari database
        $pengaturan = Pengaturan::find($id);
    
        $input = $request->all();
        if ($image = $request->file('imgpembina')) {
            $destinationPath = 'images/imgpengaturan/imgpembina/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['imgpembina'] = "$profileImage";
        }
        else{
            unset($input['imgpembina']);
        }

        // Update data pengaturan dari request
        // $pengaturan->update($request->except('imgpembina'));
        $pengaturan->update($input);
        // Pengaturan::create($input);

        return redirect()->route('admin-pengaturan.index')->with('sukses', 'Data berhasil diperbarui');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaturan $pengaturan)
    {
        //
    }
}
