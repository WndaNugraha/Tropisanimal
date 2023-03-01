<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.Kategori.index',[
            'kategori' => Kategori::all(),
            'title' => 'Kategori'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Kategori.create',[
            'title' => 'Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kategori' => 'required|unique:kategoris'
        ]);

        $kategoris = new Kategori();
        $kategoris->kategori = $request->kategori;
        $kategoris->save();
        return redirect('/dashboard/kategori')->with('success','Data Berhasil Dibuat');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::FindOrFail($id);
        return view('backend.Kategori.edit',[
            'title' => 'Edit',
            'data' => $kategori

        ]);
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
        //
        $data = $request->validate([
            'kategori' => 'required'
        ]);

        $kategoris = Kategori::FindOrFail($id);
        $kategoris->kategori = $request->kategori;
        $kategoris->save();
        return redirect('/dashboard/kategori')->with('success','Data Berhasil Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoris = FindOrFail();
        $kategoris->delete();
        return redirect('/dashboard/kategori')->with('success','Data Berhasil Dihapus');
    }
}
