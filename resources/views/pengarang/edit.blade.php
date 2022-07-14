@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Pengarang</h3>
        <form action="{{ url('/pengarang/' . $row->pengarang_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Id Buku</label>
                <input type="text" class="form-control" name="pengarang_id_buku" value="{{ $row->pengarang_id_buku }}"></>
            </div>
            <div class="mb-3">
                <label>Nama Pengarang</label>
                <input type="text" class="form-control" name="pengarang_nama" value="{{ $row->pengarang_nama }}"></>
            </div>
            <div class="mb-3">
                <label>Daerah Pengarang</label>
                <input type="text" class="form-control" name="pengarang_daerah" value="{{ $row->pengarang_daerah }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
