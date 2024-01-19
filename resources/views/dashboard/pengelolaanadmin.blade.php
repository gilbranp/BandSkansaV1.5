@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Management Admin</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="/admin-anggota"><button type="button" class="btn btn-dark">Kelola Anggota</button></a>
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
            <h3>Data Admin</h3>
        </span>
        <span style="float: right" ;>
            <!-- Button trigger modal -->
            @can('superadmin')
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#tambahAdmin">
                Tambah Admin
            </button>
            @endcan
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
                            <div class="form-floating mt-2">
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
                            <div class="form-floating mt-2">
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
                            <div class="form-floating mt-2">
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
                            <div class="dropdown-center mt-2">
                                <select name="hakakses" class="form-select dropdown-toggle w-100" required>
                                    <option style="text-align: center;" value="" disabled selected>==== SILAHKAN PILIH SALAH SATU ====</option>
                                    <option style="text-align: center;" style="text-align: center;" value="superadmin">Super Admin</option>
                                    <option style="text-align: center;" value="admin">Admin</option>
                                    <option style="text-align: center;" value="editor">Editor</option>
                                </select>
                            </div>


                            {{-- <div class="dropdown-center">
       <select name="hakakses" id="hakakses" required>
       <option class="dropdown-toggle">====Tidak Ada Data Yang Dipilih====</option>
       <option value="SuperAdmin">Super Admin</option>
       <option value="Admin">Admin</option>
      </select>
      </div> --}}
                            <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Tambahkan</button>
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
                    <th>Email</th>
                    <th>Username</th>
                    <th>Hak Akses</th>
                    <th>OPSI</th>
                </tr>
            </thead>

            <tbody>
                @if ($user->count() > 0)
                @foreach ($user as $users )
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $users->name }}</td>
                    <td class="align-middle">{{ $users->email }}</td>
                    <td class="align-middle">{{ $users->username }}</td>
                    <td class="align-middle">{{ $users->hakakses }}</td>
                    <td class="align-middle">
                        {{-- <a href="{{ route('admin-anggota.show', $users->id) }}" class="btn btn-success">DETAIL</a> --}}
                        <a href="{{ route('admin-pengelolaanadmin.edit', $users->id) }}" class="btn btn-warning">EDIT</a>
                        <form action="{{ route('admin-pengelolaanadmin.destroy', $users->id) }}" method="POST" type="button"
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
