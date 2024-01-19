<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\ContactPesan;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi data dari request
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'pesan' => 'required',
        ]);

        // Simpan pesan ke database
        $pesan = new ContactMessage();
        $pesan->nama = $validatedData['nama'];
        $pesan->email = $validatedData['email'];
        $pesan->subjek = $validatedData['subjek'];
        $pesan->pesan = $validatedData['pesan'];
        $pesan->save();

        // Kirimkan respons atau lakukan tindakan lain setelah penyimpanan
        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
}
