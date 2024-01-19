@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengelolaan Konten</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="{{ route('admin-blogpengelolaan.index') }}"><button type="button" class="btn btn-dark">
        Kelola Konten Blog
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
    <h3>Data Konten Galeri</h3>
</span>
        <span style="float: right";>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Unggah Konten Galeri
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

<form action="{{ route('admin-pengelolaankonten.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
      </div>
        <div class="form-group">
        <label>Nama Acara</label>
        <input type="text" name="namaacara" class="form-control" placeholder="Masukkan Nama Acara" required>
      </div>
        <div class="form-group">
        <label>Tempat</label>
        <input type="text" name="tempat" class="form-control" placeholder="Masukkan Nama Tempat" required>
      </div>
      <div class="form-group">
        <label>Url</label>
        <input type="url" name="url" class="form-control" placeholder="Masukkan URL" required>
      </div>
      <div class="form-group">
        <label>Detail</label>
        <textarea type="text" name="detail" class="form-control" placeholder="Masukkan Detail" required></textarea>
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
    <th>Judul</th>
    <th>Nama Acara</th>
    <th>Tanggal</th>
    <th>Tempat</th>
    <th>OPSI</th>
</tr>
  </thead>

  <tbody>
    @if ($pengelolaans->count() > 0)
    @foreach ($pengelolaans as $pengelolaan )
<tr>
        <td class="align-middle">{{ $loop->iteration }}</td>
        <td class="align-middle">{{ $pengelolaan->judul }}</td>
        <td class="align-middle">{{ $pengelolaan->namaacara }}</td>
        <td class="align-middle">{{ $pengelolaan->tanggal }}</td>
        <td class="align-middle">{{ $pengelolaan->tempat }}</td>
        <td class="align-middle">
            <a href="{{ route('admin-pengelolaankonten.show', $pengelolaan->id) }}" class="btn btn-success">DETAIL</a>
            <a href="{{ route('admin-pengelolaankonten.edit', $pengelolaan->id) }}" class="btn btn-warning">EDIT</a>
            <form action="{{ route('admin-pengelolaankonten.destroy', $pengelolaan->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin ingin menghapus?')">
            @csrf
            @method('DELETE')
             <button class="btn btn-danger m-0">Hapus</button> 
            </form>
            
        </td>
    </tr>
    @endforeach
    @else
      <tr>
        <td class="text-center" colspan="7">Tidak Ada Data Yang Tersimpan</td>
      </tr>
    @endif
  </tbody>

</form>
    </table>
  </div>
</div>
@endsection

