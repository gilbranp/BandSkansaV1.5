@extends('dashboard.layouts.main')
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

  <div class="row">
    <div class="col-md-4">
      <img src="/images/imgblog/{{ $blogpengelolaans->img }}" class="img-fluid  mt-4" style="width: 440px; height: 440px" alt="Foto Pembina">
    </div>
    <div class="col-md-8 mt-1">
      
      <div class="form-group">
        <label>Tema</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $blogpengelolaans->tema }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Judul</label>
        <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas" value="{{ $blogpengelolaans->judul }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Penulis</label>
        <input type="text" name="telp" class="form-control" placeholder="Ex : 08xxxxx" value="{{ $blogpengelolaans->penulis }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Tag</label>
        <input type="text" name="role" class="form-control" placeholder="Ex : Gitar" value="{{ $blogpengelolaans->tag }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Tanggal</label>
        <input type="text" name="genre" class="form-control" placeholder="Pop,Koplo,Metal,dll" value="{{ $blogpengelolaans->tanggal }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Deskripsi</label>
        <textarea type="text" name="deskripsi" class="form-control"  readonly disabled>{{ $blogpengelolaans->deskripsi }}</textarea>
      </div>
      <div class="form-group">
        <label>Dibuat pada</label>
        <input type="text" name="created_at" class="form-control" placeholder="Dibuat Pada" value="{{ $blogpengelolaans->created_at }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Diupdate pada</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Di Update Pada" value="{{ $blogpengelolaans->updated_at }}" readonly disabled>
      </div>

    </div>
  </div>

  <a href="/admin-blogpengelolaan"><div class="btn btn-secondary">Kembali</div></a>
  
@endsection