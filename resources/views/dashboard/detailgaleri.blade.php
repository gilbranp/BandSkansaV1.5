@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengelolaan Konten</h1>
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
      <img src="/images/imggaleri/{{ $pengelolaan->img }}" class="img-fluid  mt-4" style="width: 440px; height: 440px" alt="Foto Konten">
    </div>
    <div class="col-md-8 mt-1">
      
      <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" value="{{ $pengelolaan->judul }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Nama Acara</label>
        <input type="text" name="namaacara" class="form-control" value="{{ $pengelolaan->namaacara }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Tempat</label>
        <input type="text" name="tempat" class="form-control" value="{{ $pengelolaan->tempat }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Url</label>
        <input type="text" name="url" class="form-control" value="{{ $pengelolaan->url }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Detail</label>
        <input type="text" name="detail" class="form-control" value="{{ $pengelolaan->detail }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Pelaksanaan Acara</label>
        <input type="date" name="tanggal" class="form-control" value="{{ $pengelolaan->tanggal }}" readonly disabled>
      </div>
      {{-- <div class="form-group">
        <label>Deskripsi</label>
        <textarea type="text" name="deskripsi" class="form-control"  readonly disabled>{{ $pengelolaan->deskripsi }}</textarea>
      </div> --}}
      <div class="form-group">
        <label>Dibuat pada</label>
        <input type="text" name="created_at" class="form-control" placeholder="Dibuat Pada" value="{{ $pengelolaan->created_at }}" readonly disabled>
      </div>
      <div class="form-group">
        <label>Diupdate pada</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Di Update Pada" value="{{ $pengelolaan->updated_at }}" readonly disabled>
      </div>

    </div>
  </div>

  <a href="/admin-pengelolaankonten"><div class="btn btn-secondary">Kembali</div></a>
@endsection