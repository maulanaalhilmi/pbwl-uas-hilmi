<?php

namespace App\Http\Controllers;
use App\Models\Buku;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Buku::all();
        return view('buku.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'buku_kode' => 'required',
                'buku_judul' => 'required',
                'buku_terbit' => 'required',
            ],
            [
                'buku_kode.required' => 'Kode Buku wajib diisi',
                'buku_judul.required' => 'Judul Buku Wajib diisi',
                'buku_terbit.required' => 'Terbit Buku wajib diisi',         
            ]
        );

       buku::create([
            'buku_kode' => $request->buku_kode,
            'buku_judul' => $request->buku_judul,
            'buku_terbit' => $request->buku_terbit,
        ]);

        return redirect('buku');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = buku::findOrFail($id);
        return view('buku.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'buku_kode' => 'required',
                'buku_judul' => 'required',
                'buku_terbit' => 'required',
            ],
            [
                'buku_kode.required' => 'Kode Buku wajib diisi',
                'buku_judul.required' => 'Judul Buku Wajib diisi',
                'buku_terbit.required' => 'Terbit Buku wajib diisi',         
            ]
        );

        $row = buku::findOrFail($id);
        $row->update([
            'buku_kode' => $request->buku_kode,
            'buku_judul' => $request->buku_judul,
            'buku_terbit' => $request->buku_terbit,

        ]);

        return redirect('buku');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = buku::findOrFail($id);
        $row->delete();

        return redirect('buku');
    }
}
