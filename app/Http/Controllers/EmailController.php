<?php

// app/Http/Controllers/EmailController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
public function sendReply(Request $request)
{
    $email = $request->input('email');
    $subjek = $request->input('subjek');
    $pesan = $request->input('pesan');
//  @dd($request);
    // Pemeriksaan null
    if ($email && $subjek && $pesan) {
        $data = [
            'email' => $email,
            'subjek' => $subjek,
            'pesan' => $pesan,
        ];

        // Kirim email
       
        Mail::send('dashboard.email.index', $data, function ($message) use ($data) {
            $message->to($data['email'])
                    ->subject($data['subjek']);
        });

        return redirect('/admin-kontakpendaftaran')->with('success', 'Email berhasil dikirim');
    } else {
        return redirect('/admin-kontakpendaftaran')->with('error', 'Gagal mengirim email. Mohon isi semua informasi yang diperlukan.');
    }
}

}

