@extends('dashboard.layouts.main')
<style>
    .btn-separator {
        margin-right: 150px;
        /* Sesuaikan nilai margin dengan yang diinginkan */
    }

</style>
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengelolaan Konten</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
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

<form action="{{ route('admin-pengelolaankonten.update', $pengelolaankonten->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <label for="inputEmail3" class="col-1 col-form-label">Judul</label>
        <div class="col-11">
            <input type="text" name="judul" class="form-control" required placeholder="Masukkan Nama Judul"
                value="{{ $pengelolaankonten->judul }}">
        </div>
    </div>
    <div class="row mt-1">
        <label for="inputEmail3" class="col-1 col-form-label">Acara</label>
        <div class="col-11">
            <input type="text" name="namaacara" class="form-control" required placeholder="Masukkan Nama Acara"
                value="{{ $pengelolaankonten->namaacara }}">
        </div>
    </div>

    <div class="row mt-1">
        <label for="inputEmail3" class="col-1 col-form-label">Url</label>
        <div class="col-11">
            <input type="text" name="url" class="form-control" required placeholder="Contoh : https://www.urlmu.com"
                value="{{ $pengelolaankonten->url }}">
        </div>
    </div>

    {{-- <div class="form-group mt-1" style="display: flex; align-items: center;">
    <label style="margin-right: 58px;">Detail</label>
    <textarea type="text" name="detail" class="form-control" required placeholder="Masukkan Detail" value="{{ $pengelolaankonten->detail }}"></textarea>
    </div> --}}

    <div class="row mt-1">
        <label for="inputEmail3" class="col-1 col-form-label">Detail</label>
        <div class="col-11">
            <textarea type="text" name="detail" class="form-control" required
                placeholder="Masukkan Detail">{{ $pengelolaankonten->detail }} </textarea>
        </div>
    </div>


    <div class="row mt-1">
        <label for="inputEmail3" class="col-1 col-form-label">Pelaksanaa</label>
        <div class="col-11">
            <input type="date" name="tanggal" class="form-control" required value="{{ $pengelolaankonten->tanggal }}">
        </div>
    </div>

    {{-- 
  <div class="form-group" style="display: flex; align-items: center;">
    <label for="formFile" style="margin-right: 3px" class="form-label">Ganti Foto</label>
  <input class="form-control" name="img" type="file" id="formFile">
  </div> --}}
    <div class="modal-footer mt-5">
        <a href="/admin-pengelolaankonten"><button type="button"
                class="btn btn-secondary btn-separator">Batal</button></a>
        <input type="submit" value="Simpan" name="edit" class="btn btn-warning">
    </div>
</form>
@endsection
