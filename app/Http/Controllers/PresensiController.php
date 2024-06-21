<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Presensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PresensiController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::all();
        return view('dashboard.presensi.index', compact('anggotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'status' => 'required|array',
            'status.*' => 'in:hadir,ijin,sakit,alpha'
        ]);

        $tanggal = $request->tanggal;
        $statuses = $request->status;

        foreach ($statuses as $anggota_id => $status) {
            Presensi::updateOrCreate(
                ['anggota_id' => $anggota_id, 'tanggal' => $tanggal],
                ['status' => $status]
            );
        }

        return redirect()->route('presensi.index')->with('success', 'Presensi berhasil disimpan.');
    }

    public function filter(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        $presensis = Presensi::whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->get();

        return view('dashboard.presensi.filter', compact('presensis', 'bulan', 'tahun'));
    }

    public function print(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        $presensis = Presensi::whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->get();

        return view('dashboard.presensi.print', compact('presensis', 'bulan', 'tahun'));
    }
}
