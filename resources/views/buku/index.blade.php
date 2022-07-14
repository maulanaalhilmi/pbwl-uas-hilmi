@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Buku
        <a class="btn btn-primary btn-sm float-end" href="{{ url('buku/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>JUDUL</th>
            <th>TERBIT</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->buku_id }}</td>
        <td>{{ $row->buku_kode }}</td>
        <td>{{ $row->buku_judul }}</td>
        <td>{{ $row->buku_terbit }}</td>
        <td><a href="{{ url('buku/' . $row->buku_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('buku/' . $row->buku_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection