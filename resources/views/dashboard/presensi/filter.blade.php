<!-- resources/views/presensi/filter.blade.php -->

@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <h1>Hasil Filter Presensi</h1>
    <p>Bulan: {{ $bulan }} - Tahun: {{ $tahun }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if ($presensis -> count() > 0)
            @foreach ($presensis as $presensi)
                <tr>
                    <td>{{ $presensi->anggota->nama }}</td>
                    <td>{{ $presensi->tanggal }}</td>
                    <td>{{ $presensi->status }}</td>
                </tr>
            @endforeach
            @else
            <tr>
              <td class="text-center" colspan="3">Tidak Ada Data Yang Tersimpan</td>
            </tr>
          @endif
        </tbody>
    </table>
    <a href="{{ route('presensi.print', ['bulan' => $bulan, 'tahun' => $tahun]) }}" class="btn btn-secondary">Print</a>
    <a href="/presensi" class="btn btn-primary">Kembali</a>
</div>
@endsection
