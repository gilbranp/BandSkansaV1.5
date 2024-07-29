@extends('dashboard.layouts.main')

@section('container')
 <!-- CKEditor CDN -->
 <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>

 <style>
    .editor {
        min-height: 400px;
    }
</style>

{{-- Judul --}}
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Prestasi</h1>
</div>
{{-- End judul --}}

@if (Session::has('sukses'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('sukses') }}
        </div>
        @endif
        @foreach ($prestasi as $p)
<form action="{{ route('admin-prestasi.update',$p->id) }}" method="POST">
    @endforeach
    @csrf
    @method('PUT')

<div class="row">
    <div class="col-md-12">
        {{-- @if ($prestasi->count() > 0) --}}
        @foreach ($prestasi as $p)
        <textarea name="deskripsi" id="editor" class="form-control custom-textarea" rows="15">{{ $p->deskripsi }}</textarea>
        @endforeach
        {{-- @else
        <textarea name="deskripsi" id="editor" class="form-control custom-textarea" rows="15">Silahkan Isi Prestasi disini</textarea> 
        @endif --}}
    </div>
</div>

    <div class="pt-3">
        <button class="btn btn-primary" type="submit" value="submit">Save</button>
    </div>
</form>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo']
        })
        .catch(error => {
            console.error(error);
        });
</script>


@endsection
