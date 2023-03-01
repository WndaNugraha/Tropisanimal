<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;
use Illuminate\Support\Str;

class kontakcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontend.kontak',[
            'title' => 'Kontak',
            'kontak' => kontak::all()
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
        return view('frontend.kontak');
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
        $data = $request->validate([
            'subject' => '',
            'nama' => 'required',
            'deskripsi' => 'required',
            'email' => 'required|email',

        ]);
        

        $kontaks = new kontak();
        $kontaks->subject = $request->subject;
        $kontaks->nama = $request->nama;
        $kontaks->email = $request->email;
        $kontaks->deskripsi = $request->deskripsi;
        $kontaks->excerpt = Str::limit(strip_tags($request->deskripsi), 50, '...');


        $kontaks->save();

        return redirect('/kontak/#kontak')->with('success', 'Anda Berhasil Kontak Kami :)');
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
    }
}
