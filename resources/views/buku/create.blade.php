@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Buku</h3>
        <form action="{{ url('/buku') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Kode Buku</label>
                <input type="text" class="form-control" name="buku_kode">
            </div>
            <div class="mb-3">
                <label>Judul Buku</label>
                <input type="text" class="form-control" name="buku_judul">
            </div>
            <div class="mb-3">
                <label>Terbit Buku</label>
                <input type="text" class="form-control" name="buku_terbit">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
