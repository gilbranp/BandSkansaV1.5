@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <h1>Presensi</h1>
    <form action="{{ route('presensi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <table class="table table-bordered">
            @if (Session::has('sukses'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('sukses') }}
            </div>
            @endif
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggotas as $anggota)
                    <tr>
                        <td>{{ $anggota->nama }}</td>
                        <td>
                            <select name="status[{{ $anggota->id }}]" class="form-select" required>
                                <option disabled selected value="">== KETERANGAN ==</option>
                                <option value="hadir">Hadir</option>
                                <option value="ijin">Ijin</option>
                                <option value="sakit">Sakit</option>
                                <option value="alpha">Alpha</option>
                            </select>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <h2 class="mt-5">Filter dan Print Presensi</h2>
    <form action="{{ route('presensi.filter') }}" method="GET" class="row g-3">
        <div class="col-md-4">
            <label for="bulan" class="form-label">Bulan</label>
            <select id="bulan" name="bulan" class="form-select" required>
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" id="tahun" name="tahun" class="form-control" required>
        </div>
        <div class="col-md-4 align-self-end">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </form>
</div>
@endsection