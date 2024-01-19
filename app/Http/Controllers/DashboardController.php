<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\Pengaturan;

class DashboardController extends Controller
{
   public function index()
   {
    // $pengaturan = Pengaturan::orderBy('created_at', 'DESC')->get();
    //     return view("dashboard.layouts.header", compact('pengaturan'));
    return view('/dashboard/index');
   }
   // public function anggota()
   // {
   //  return view('/dashboard/anggota');
   // }
   public function jadwal()
   {
    return view('/dashboard/jadwal');
   }
   public function pengelolaankonten()
   {
    return view('/dashboard/pengelolaankonten');
   }
   public function kontakpendaftaran()
   {
      $pesan = ContactMessage::all();
    return view('/dashboard/kontakpendaftaran',[
      'pesan' => $pesan
    ]);
   }
   public function laporan()
   {
    return view('/dashboard/laporan');
   }
   public function pengaturan()
   {
    return view('/dashboard/pengaturan');
   }

   public function detail()
   {
    return view('dashboard.detail');
   }
   public function edit()
   {
    return view('dashboard.edit');
   }

   
}
