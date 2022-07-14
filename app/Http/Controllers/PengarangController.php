<?php

namespace App\Http\Controllers;
use App\Models\Pengarang;

use Illuminate\Http\Request;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Pengarang::all();
        return view('pengarang.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengarang.create');
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
                'pengarang_id_buku' => 'required',
                'pengarang_nama' => 'required',
                'pengarang_daerah' => 'required',
            ],
            [
                'pengarang_id_buku.required' => 'Id Buku Pengarang wajib diisi',
                'pengarang_nama.required' => 'Nama Pengarang Wajib diisi',
                'pengarang_daerah.required' => 'Daerah Pengarang wajib diisi',
            ]
        );

       pengarang::create([
            'pengarang_id_buku' => $request->pengarang_id_buku,
            'pengarang_nama' => $request->pengarang_nama,
            'pengarang_daerah' => $request->pengarang_daerah,
        ]);

        return redirect('pengarang');
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
        $row = pengarang::findOrFail($id);
        return view('pengarang.edit', compact('row'));
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
                'pengarang_id_buku' => 'required',
                'pengarang_nama' => 'required',
                'pengarang_daerah' => 'required',
            ],
            [
                'pengarang_id_buku.required' => 'Id Buku Pengarang wajib diisi',
                'pengarang_nama.required' => 'Nama Pengarang Wajib diisi',
                'pengarang_daerah.required' => 'Daerah Pengarang wajib diisi',
            ]
        );

        $row = pengarang::findOrFail($id);
        $row->update([
            'pengarang_id_buku' => $request->pengarang_id_buku,
            'pengarang_nama' => $request->pengarang_nama,
            'pengarang_daerah' => $request->pengarang_daerah,
        ]);

        return redirect('pengarang');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = pengarang::findOrFail($id);
        $row->delete();

        return redirect('pengarang');
    }
}
