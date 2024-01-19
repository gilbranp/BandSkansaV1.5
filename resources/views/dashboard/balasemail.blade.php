@extends('dashboard.layouts.main')

@section('container')

<div class="container mt-5">
    <h2>Balas {{ $pesan->nama }}</h2>
    <form action="/send-reply" method="POST">
        @csrf
        <!-- Ubah "to@example.com" menjadi alamat email penerima yang diambil dari URL parameter -->
        <div class="form-group">
            <label for="recipient">Kepada:</label>
            <input type="text" class="form-control" id="recipient" name="email" value="{{ $pesan->email }}" readonly>
        </div>
        <div class="form-group">
            <label for="subject">Subjek:</label>
            <input type="text" class="form-control" required id="subject" name="subjek" value="{{ $pesan->subjek }}">
        </div>
        <div class="form-group">
            <label for="message">Pesan:</label>
            <textarea class="form-control" required minlength="10" id="message" name="pesan" rows="6"></textarea>
        </div>
        <div class="mt-2">
        <a href="/admin-kontakpendaftaran"><button type="button" class="btn btn-secondary">Batal</button></a>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
    </form>
</div>


@endsection