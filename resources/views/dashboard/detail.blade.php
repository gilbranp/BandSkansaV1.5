@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
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

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $anggota->nama }}" readonly disabled>
  </div>
  <div class="form-group">
    <label>Kelas</label>
    <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas" value="{{ $anggota->kelas }}" readonly disabled>
  </div>
  <div class="form-group">
    <label>Telp</label>
    <input type="text" name="telp" class="form-control" placeholder="Ex : 08xxxxx" value="{{ $anggota->telp }}" readonly disabled>
  </div>
  <div class="form-group">
    <label>Role</label>
    <input type="text" name="role" class="form-control" placeholder="Ex : Gitar" value="{{ $anggota->role }}" readonly disabled>
  </div>
  <div class="form-group">
    <label>Genre</label>
    <input type="text" name="genre" class="form-control" placeholder="Pop,Koplo,Metal,dll" value="{{ $anggota->genre }}" readonly disabled>
  </div>
  <div class="form-group">
    <label>Dibuat pada</label>
    <input type="text" name="created_at" class="form-control" placeholder="Dibuat Pada" value="{{ $anggota->created_at }}" readonly disabled>
  </div>
@endsection