

@extends('dashboard.layouts.main')
<style>
  .btn-separator {
      margin-right: 150px; /* Sesuaikan nilai margin dengan yang diinginkan */
  }
  
</style>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Management Admin</h1>
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

  <form action="{{ route('admin-pengelolaanadmin.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group" style="display: flex; align-items: center;">
    <label style="margin-right: 55px;">Nama</label>
    <input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama" value="{{ $user->name }}">
  </div>
  <div class="form-group mt-1" style="display: flex; align-items: center;">
    <label style="margin-right: 59px;">Email</label>
    <input type="text" name="kelas" class="form-control" required placeholder="Masukkan Email" value="{{ $user->email }}">
  </div>


  <div class="form-group mt-1" style="display: flex; align-items: center;">
    <label style="margin-right: 25px;">Username</label>
    <input type="text" name="telp" class="form-control" required placeholder="Masukkan Username" value="{{ $user->username }}">
</div>

  <div class="form-group mt-1" style="display: flex; align-items: center;">
    <label style="margin-right: 30px;">Hak Akses</label>
    <select name="hakakses" class="form-select dropdown-toggle w-100" required>
        <option value="" disabled selected>{{ $user->hakakses }}</option>
        <option value="superadmin">Super Admin</option>
        <option value="admin">Admin</option>
        <option value="editor">Editor</option>
    </select>
  </div>
{{-- 
  <div class="form-group" style="display: flex; align-items: center;">
    <label for="formFile" style="margin-right: 3px" class="form-label">Ganti Foto</label>
  <input class="form-control" name="img" type="file" id="formFile">
  </div> --}}
  <div class="modal-footer mt-5">
    <a href="/admin-pengelolaanadmin"><button type="button" class="btn btn-secondary btn-separator">Batal</button></a>
    <input type="submit" value="Simpan" name="edit" class="btn btn-warning">
  </div>
</form>
@endsection