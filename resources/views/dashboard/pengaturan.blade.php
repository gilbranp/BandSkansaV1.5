@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengaturan</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
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
    <h1>Pengaturan Umum</h1>
    {{-- @if ($pengaturan->count() > 0) --}}
    @foreach ($pengaturans as $pengaturan)
    <form action="{{ route('admin-pengaturan.update', $pengaturan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- Tambahkan CSRF token jika menggunakan Laravel -->
        @method('PUT')
        @if (session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    {{-- <div class="container">
        <div class="row">
            <div class="col-md-4">
                <label>Header:</label>
            <input type="text" name="namaheader" class="form-control" placeholder="Bagian Header" value="{{ $pengaturan->namaheader }}" required>
            </div>
        </div>
    </div> --}}

        <div class="form-group" style="display: flex; align-items: center;">
            <label style="margin-right: 24px;">Header:</label>
            <input type="text" name="namaheader" class="form-control" placeholder="Bagian Header" value="{{ $pengaturan->namaheader }}" required>
        </div>
        <div class="form-group mt-2" style="display: flex; align-items: center;">
            <label style="margin-right: 15px;">Pembina:</label>
            <input name="namapembina" class="form-control" placeholder="Masukkan Nama Untuk Pembina" value="{{ $pengaturan->namapembina }}" required>
        </div>
        <div class="form-group" style="display: flex; align-items: center;">
            <label style="margin-right: -30px;">Halaman Depan:</label>
            <input name="namadepan" class="form-control" placeholder="Masukkan Nama Untuk Halaman Utama" value="{{ $pengaturan->namadepan }}" required>
        </div>

        <div class="form-group" style="display: flex; align-items: center;">
            <label style="margin-right: 25px;">Alamat:</label>
            <input name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{ $pengaturan->alamat }}" required>
        </div>

        <div class="form-group" style="display: flex; align-items: center;">
            <label style="margin-right: 32px;">No Hp:</label>
            <input type="number" name="nohp" minlength="12" maxlength="13" class="form-control" placeholder="Contoh : +628xxxx" value="{{ $pengaturan->nohp }}" required>
        </div>
        <div class="form-group" style="display: flex; align-items: center;">
            <label style="margin-right: 36px;">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Contoh : gilbran@gmail.com" value="{{ $pengaturan->email }}" required>
        </div>
        <div class="form-group" style="display: flex; align-items: center;">
            <label style="margin-right: -5px;">Desk Depan:</label>
            <input name="deskdepan" class="form-control" placeholder="Masukkan Deskripsi Untuk Halaman Depan" value="{{ $pengaturan->deskdepan }}" required>
        </div>
        <div class="form-group" style="display: flex; align-items: center;">
            <label style="margin-right: -5px;">Desk Kontak:</label>
            <input name="deskkontak" class="form-control" placeholder="Masukkan Deskripsi Untuk Section Kontak" value="{{ $pengaturan->deskkontak }}" required>
        </div>
        <div class="form-group" style="display: flex; align-items: center;">
            <label style="margin-right: -17px;">Foto Pembina:</label>
            <input class="form-control" name="imgpembina" type="file" id="formFile" value="{{ $pengaturan->imgpembina }}">
        </div>
        
   <input type="submit" value="Simpan" name="edit" class="btn btn-warning mt-4">
   <a href="/admin-pengaturan"><div class="btn btn-secondary mt-4">Refresh</div></a>
    </form>
@endforeach
    {{-- <h1>Manajemen Akun Admin</h1>
    <!-- Form untuk menambah akun admin -->
    <form action="/tambah-akun-admin" method="POST">
        @csrf <!-- Tambahkan CSRF token jika menggunakan Laravel -->
        <div class="mb-3">
            <label for="nama_admin" class="form-label">Nama Admin:</label>
            <input type="text" id="nama_admin" name="nama_admin" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email_admin" class="form-label">Email Admin:</label>
            <input type="email" id="email_admin" name="email_admin" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password_admin" class="form-label">Password Admin:</label>
            <input type="password" id="password_admin" name="password_admin" class="form-control">
        </div>

        <div class="mb-3">
            <label for="hak_akses" class="form-label">Hak Akses:</label>
            <select id="hak_akses" name="hak_akses" class="form-select">
                <option value="admin">Admin</option>
                <option value="super_admin">Super Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Akun Admin</button>
    </form> --}}

    {{-- <h3>Daftar Akun Admin</h3> --}}
    <!-- Tabel untuk menampilkan daftar admin -->
    {{-- <table class="table">
        <thead>
            <tr>
                <th>Nama Admin</th>
                <th>Email Admin</th>
                <th>Hak Akses</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody> --}}
            <!-- Tampilkan daftar admin dari database -->
            {{-- @foreach($daftar_admin as $admin) --}}
            {{-- <tr>
                <td>dwen</td>
                <td>mail.com</td>
                <td>admin</td>
                <td> --}}
                    {{-- <a href="/hapus-akun-admin/{{ $admin->id }}" class="btn btn-danger">Hapus</a> --}}
                    {{-- <a href="/hapus-akun-admin/1" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
   
</div>
     


@endsection

