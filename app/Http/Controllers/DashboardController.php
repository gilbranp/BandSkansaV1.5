<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
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
    return view('/dashboard/kontakpendaftaran');
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
