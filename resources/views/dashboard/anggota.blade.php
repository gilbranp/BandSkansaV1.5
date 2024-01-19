@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Management Anggota</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        @can('superadmin')
        <a href="/admin-pengelolaanadmin"><button type="button" class="btn btn-dark">Kelola Admin</button></a>
        @endcan
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

<div class="card">
    <div class="card-header">
        <span style="float: left;">
            <h3>Data Anggota Band</h3>
        </span>
        <span style="float: right" ;>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Anggota
            </button>

            <!-- Modal -->
            <div class="modal fade" id="tambahAdmin" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">

                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data Admin</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <!--  -->

                            <form action="/register" method="post">
                                @csrf
                                <div class="form-floating">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="Nama" required value="{{ old('name') }}">
                                    <label for="name">Nama</label>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="form-floating">
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror" id="username"
                                        placeholder="Username" required value="{{ old('username') }}">
                                    <label for="username">Username</label>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="form-floating">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="name@example.com" required value="{{ old('email') }}">
                                    <label for="email">Email address</label>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        placeholder="Password" required>
                                    <label for="password">Password</label>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="dropdown-center">
                                    <select name="hakakses" class="dropdown-toggle w-100" required>
                                        <option value="" disabled selected>== SILAHKAN PILIH SALAH SATU ==</option>
                                        <option value="superadmin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="editor">Editor</option>
                                    </select>
                                </div>


                                {{-- <div class="dropdown-center">
           <select name="hakakses" id="hakakses" required>
           <option class="dropdown-toggle">====Tidak Ada Data Yang Dipilih====</option>
           <option value="SuperAdmin">Super Admin</option>
           <option value="Admin">Admin</option>
          </select>
          </div> --}}
                                <button class="btn btn-primary w-100 py-2" type="submit">Tambahkan</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            {{-- <input type="submit" value="Tambah" name="simpan" class="btn btn-primary"> --}}

                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data Anggota</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <!--  -->

                            <form action="{{ route('admin-anggota.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Telp</label>
                                    <input type="text" name="telp" class="form-control" placeholder="Ex : 08xxxxx"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="text" name="role" class="form-control" placeholder="Ex : Gitar"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Genre</label>
                                    <input type="text" name="genre" class="form-control"
                                        placeholder="Pop,Koplo,Metal,dll" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control"
                                        placeholder="Deskripsi tentang anda" required></textarea>
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
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Telp</th>
                    <th>Role</th>
                    <th>Genre</th>
                    <th>OPSI</th>
                </tr>
            </thead>

            <tbody>
                @if ($anggotas->count() > 0)
                @foreach ($anggotas as $anggota )
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $anggota->nama }}</td>
                    <td class="align-middle">{{ $anggota->kelas }}</td>
                    <td class="align-middle">{{ $anggota->telp }}</td>
                    <td class="align-middle">{{ $anggota->role }}</td>
                    <td class="align-middle">{{ $anggota->genre }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin-anggota.show', $anggota->id) }}" class="btn btn-success">DETAIL</a>
                        <a href="{{ route('admin-anggota.edit', $anggota->id) }}" class="btn btn-warning">EDIT</a>
                        <form action="{{ route('admin-anggota.destroy', $anggota->id) }}" method="POST" type="button"
                            class="btn btn-danger p-0" onsubmit="return confirm('Yakin ingin menghapus?')">
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
