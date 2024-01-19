@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kontak & Pendaftaran</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="/admin-kontakpendaftaran"><button type="button" class="btn btn-dark">Kelola Pesan</button></a>
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
        <svg class="bi"><use xlink:href="#calendar3"/></svg>
        This week
      </button>
    </div>
  </div>

  <div class="container">
    <h2>Pesan Masuk</h2>
    @if (Session::has('sukses'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('sukses') }}
        </div>
        @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Posisi</th>
                <th>Pengalaman</th>
                <th>Date</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          @if ($calonanggota->count() > 0)
            @foreach($calonanggota as $calonanggotas)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $calonanggotas->namalengkap }}</td>
                    <td>{{ $calonanggotas->email }}</td>
                    <td>{{ $calonanggotas->posisi }}</td>
                    <td>{{ $calonanggotas->pengalaman }}</td>
                    <td>{{ $calonanggotas->created_at }}</td>
                    <td>
                      {{-- <button class="btn btn-warning" onclick="reply('{{ $pesans->email }}')">Balas</button> --}}
                      {{-- <button class="btn btn-warning" a href="{{ route('admin-kontakpendafataran.show',$pesans->id) }}">Balas</button> --}}
                      {{-- <a href="{{ route('admin-kontakpendafataran.show', $calonanggotas->id) }}" class="btn btn-warning">Balas</a> --}}
                      <form action="{{ route('admin-calonanggota.destroy',$calonanggotas->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                         <button class="btn btn-danger m-0">Hapus</button> 
                        </form>
                        
                    </td>
                </tr>

                {{-- <script>
                  function reply(email) {
                      // Mengarahkan ke halaman pembuatan pesan baru dengan alamat email pengirim diisi sebagai tujuan balasan
                      window.location.href = "/compose?to=" + email; // Ganti "/compose" dengan URL halaman pembuatan pesan Anda
                  }
              </script> --}}
            @endforeach
            @else
            <tr>
              <td class="text-center" colspan="7">Belum Ada Data Pendaftar</td>
            </tr>
          @endif
        </tbody>
    </table>
</div>
@endsection

