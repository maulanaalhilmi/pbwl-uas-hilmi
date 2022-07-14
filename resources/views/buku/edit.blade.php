@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Buku</h3>
        <form action="{{ url('/buku/' . $row->buku_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Kode Buku</label>
                <input type="text" class="form-control" name="buku_kode" value="{{ $row->buku_kode }}"></>
            </div>
            <div class="mb-3">
                <label>Judul Buku</label>
                <input type="text" class="form-control" name="buku_judul" value="{{ $row->buku_judul }}"></>
            </div>
            <div class="mb-3">
                <label>Terbit Buku</label>
                <input type="text" class="form-control" name="buku_terbit" value="{{ $row->buku_terbit }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
