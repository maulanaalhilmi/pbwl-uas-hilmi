@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Pengarang
        <a class="btn btn-primary btn-sm float-end" href="{{ url('pengarang/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID BUKU</th>
            <th>NAMA</th>
            <th>DAERAH</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->pengarang_id }}</td>
        <td>{{ $row->pengarang_id_buku }}</td>
        <td>{{ $row->pengarang_nama }}</td>
        <td>{{ $row->pengarang_daerah }}</td>
        <td><a href="{{ url('pengarang/' . $row->pengarang_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('pengarang/' . $row->pengarang_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection