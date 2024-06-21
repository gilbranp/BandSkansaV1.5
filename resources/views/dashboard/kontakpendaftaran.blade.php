@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kontak & Pendaftaran</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        @can('superadmin') {{--super admin dan admin --}}
        <a href="/admin-calonanggota"><button type="button" class="btn btn-dark">Calon Anggota</button></a>
        @endcan
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi">
                <use xlink:href="#calendar3" /></svg>
            This week
        </button>
    </div>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="container">
    <h2>Pesan Masuk</h2>
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($pesan->count() > 0)
                    @foreach($pesan as $pesans)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pesans->nama }}</td>
                        <td>{{ $pesans->email }}</td>
                        <td>{{ $pesans->subjek }}</td>
                        <td>{{ $pesans->pesan }}</td>
                        <td>{{ $pesans->created_at }}</td>
                        <td>
                            {{-- <button class="btn btn-warning" onclick="reply('{{ $pesans->email }}')">Balas</button>
                            --}}
                            {{-- <button class="btn btn-warning" a href="{{ route('admin-kontakpendafataran.show',$pesans->id) }}">Balas</button>
                            --}}
                            <a href="{{ route('admin-kontakpendafataran.show', $pesans->id) }}"
                                class="btn btn-warning">Balas</a>
                            <form action="{{ route('admin-kontakpendafataran.destroy',$pesans->id) }}" method="POST"
                                type="button" class="btn btn-danger p-0"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Hapus</button>
                            </form>

                        </td>
                    </tr>

                    <script>
                        function reply(email) {
                            // Mengarahkan ke halaman pembuatan pesan baru dengan alamat email pengirim diisi sebagai tujuan balasan
                            window.location.href = "/compose?to=" +
                            email; // Ganti "/compose" dengan URL halaman pembuatan pesan Anda
                        }

                    </script>
                    @endforeach
                    @else
                    <tr>
                        <td class="text-center" colspan="7">Belum Ada Pesan Masuk</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
