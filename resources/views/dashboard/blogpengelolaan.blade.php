@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengelolaan Konten</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="{{ route('admin-pengelolaankonten.index') }}"><button type="button" class="btn btn-primary">
        Kelola Konten Galeri
      </button></a>
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

  <div class="card">
    <div class="card-header">
        <span style="float: left;">
    <h3>Data Konten Blog</h3>
</span>
        <span style="float: right">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Unggah Blog
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Konten Galeri</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!--  -->

<form action="{{ route('admin-blogpengelolaan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
        <label>Tema</label>
        <input type="text" name="tema" class="form-control" placeholder="Masukkan Tema" required>
      </div>
        <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
      </div>
        <div class="form-group">
        <label>Deskripsi</label>
        <textarea type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" required></textarea>
      </div>
      <div class="form-group">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control" placeholder="Masukkan Nama Penulis" required>
      </div>
      <div class="form-group">
        <label>Tag</label>
        <input type="text" name="tag" class="form-control" placeholder="Contoh : #BandSkansa" required>
      </div>
      <div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
      </div>
      <label for="formFile" class="form-label">Unggah Foto</label>
      <input class="form-control" name="img" type="file" id="formFile" required>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" value="Tambah" name="simpan" class="btn btn-primary">

        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </form>

    </div>
  </div>
</div>

</span>
</div>
<div class="card-body">
  @if (Session::has('sukses'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('sukses') }}
    </div>
  @endif
<table class="table table-bordered table-hover">
  <thead class="table-primary">
<tr>
    <th>NO</th>
    <th>Tema</th>
    <th>Judul</th>
    {{-- <th>Deskripsi</th> --}}
    <th>Penulis</th>
    <th>Tag</th>
    <th>Tanggal</th>
    <th>OPSI</th>
</tr>
  </thead>

  <tbody>
    @if ($blogpengelolaans->count() > 0)
    @foreach ($blogpengelolaans as $blogpengelola )
<tr>
        <td class="align-middle">{{ $loop->iteration }}</td>
        <td class="align-middle">{{ $blogpengelola->tema }}</td>
        <td class="align-middle">{{ $blogpengelola->judul }}</td>
        {{-- <td class="align-middle">{{ $blogpengelola->deskripsi }}</td> --}}
        <td class="align-middle">{{ $blogpengelola->penulis }}</td>
        <td class="align-middle">{{ $blogpengelola->tag }}</td>
        <td class="align-middle">{{ $blogpengelola->tanggal }}</td>
        <td class="align-middle">
            <a href="{{ route('admin-blogpengelolaan.show',$blogpengelola->id) }}" class="btn btn-success">DETAIL</a>
            <a href="" class="btn btn-warning">EDIT</a>
            <form action="{{ route('admin-blogpengelolaan.destroy',$blogpengelola->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin ingin menghapus?')">
            @csrf
            @method('DELETE')
             <button class="btn btn-danger m-0">Hapus</button> 
            </form>
            
        </td>
    </tr>
    @endforeach
    @else
      <tr>
        <td class="text-center" colspan="8">Tidak Ada Data Yang Tersimpan</td>
      </tr>
    @endif
  </tbody>

</form>
    </table>
  </div>
</div>
@endsection

