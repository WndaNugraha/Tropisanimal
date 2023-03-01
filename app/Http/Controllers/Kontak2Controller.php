<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;


class Kontak2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datakontak = kontak::latest();
        if(request('search')){
            $datakontak->where('nama','like','%'.request('search'). '%')
                       ->orWhere('subject','like','%'.request('search').'%');
        }

        return view('backend.kontak.index',[
            'title' => 'Kontaks',
            'data' => $datakontak->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = kontak::findOrFail($id);
        return view('backend.kontak.show', compact('data'),[
            'title' => 'Show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kontaks = kontak::findOrFail($id);
        $kontaks->delete();
        return redirect('/dashboard/kontaks')->with('success', 'Data berhasil dihapus!');
    }
}

