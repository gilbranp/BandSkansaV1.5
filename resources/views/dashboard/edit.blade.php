

@extends('dashboard.layouts.main')
<style>
  .btn-separator {
      margin-right: 150px; /* Sesuaikan nilai margin dengan yang diinginkan */
  }
  
</style>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Management Anggota</h1>
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

  <form action="{{ route('admin-anggota.update', $anggota->id) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group" style="display: flex; align-items: center;">
    <label style="margin-right: 30px;">Nama</label>
    <input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama" value="{{ $anggota->nama }}">
  </div>
  <div class="form-group" style="display: flex; align-items: center;">
    <label style="margin-right: 35px;">Kelas</label>
    <input type="text" name="kelas" class="form-control" required placeholder="Masukkan Kelas" value="{{ $anggota->kelas }}">
  </div>


  <div class="form-group" style="display: flex; align-items: center;">
    <label style="margin-right: 43px;">Telp</label>
    <input type="text" name="telp" class="form-control" required placeholder="Ex : 08xxxxx" value="{{ $anggota->telp }}">
</div>

  <div class="form-group" style="display: flex; align-items: center;">
    <label style="margin-right: 41px;">Role</label>
    <input type="text" name="role" class="form-control" required placeholder="Ex : Gitar" value="{{ $anggota->role }}">
  </div>
  <div class="form-group" style="display: flex; align-items: center;">
    <label style="margin-right: 30px;">Genre</label>
    <input type="text" name="genre" class="form-control" required placeholder="Pop,Koplo,Metal,dll" value="{{ $anggota->genre }}">
  </div>
  <div class="form-group" style="display: flex; align-items: center;">
    <label style="margin-right: 8px;">Deskripsi</label>
    <textarea type="text" name="deskripsi" class="form-control" required placeholder="Deskripsi tentang anda" >{{ $anggota->deskripsi }} </textarea>
  </div>
{{-- 
  <div class="form-group" style="display: flex; align-items: center;">
    <label for="formFile" style="margin-right: 3px" class="form-label">Ganti Foto</label>
  <input class="form-control" name="img" type="file" id="formFile">
  </div> --}}
  <div class="modal-footer mt-5">
    <a href="/admin-anggota"><button type="button" class="btn btn-secondary btn-separator">Batal</button></a>
    <input type="submit" value="Simpan" name="edit" class="btn btn-warning">
  </div>
</form>
@endsection