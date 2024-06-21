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
            @foreach ($presensis as $presensi)
                <tr>
                    <td>{{ $presensi->anggota->nama }}</td>
                    <td>{{ $presensi->tanggal }}</td>
                    <td>{{ $presensi->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('presensi.print', ['bulan' => $bulan, 'tahun' => $tahun]) }}" class="btn btn-secondary">Print</a>
</div>
@endsection
