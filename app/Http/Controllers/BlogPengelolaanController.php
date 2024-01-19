<?php

namespace App\Http\Controllers;

use App\Models\BlogPengelolaan;
use Illuminate\Http\Request;

class BlogPengelolaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogpengelolaans = BlogPengelolaan::orderBy('created_at', 'DESC')->get();
        return view("dashboard.blogpengelolaan", compact('blogpengelolaans'));
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
            $destinationPath = 'images/imgblog/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }
        else{
            unset($input['img']);
        }
        
        BlogPengelolaan::create($input);

        return redirect()->route('admin-blogpengelolaan.index')->with('sukses', 'Data blog berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogpengelolaans = BlogPengelolaan::findOrFail($id);
        return view('dashboard.detailblog', compact('blogpengelolaans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPengelolaan $blogPengelolaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPengelolaan $blogPengelolaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogpengelolaan = BlogPengelolaan::findOrFail($id);
        $blogpengelolaan->delete(); // Menghapus entitas dari database

        return redirect()->route('admin-blogpengelolaan.index')->with('sukses', 'Data blog berhasil dihapus');
    }
}
