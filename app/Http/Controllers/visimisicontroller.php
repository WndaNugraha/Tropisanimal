<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visimisi;
use Illuminate\Support\Str; 

class visimisicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = visimisi::all();
        return view('backend.visimisi.index', compact('data'),[
            'title' => 'Visi Misi'
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
        return view('backend.visimisi.create',[
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
        //
        
        $data = $request->validate([
            'visi' => 'required',
            'bodyvisi' => 'required',
            'misi' => 'required',
            'bodymisi' => 'required',

        ]);
        

        $visimisis = new visimisi();
        $visimisis->visi = $request->visi;
        $visimisis->bodyvisi = $request->bodyvisi;
        $visimisis->misi = $request->misi;
        $visimisis->bodymisi = $request->bodymisi;
        $visimisis->excerptvisi = Str::limit(strip_tags($request->bodyvisi), 90, '...');
        $visimisis->excerptmisi = Str::limit(strip_tags($request->bodymisi), 90, '...');


        $visimisis->save();

        return redirect('/dashboard/visimisi')->with('success', 'data created successfully !!');
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
        $data = visimisi::findOrFail($id);
        return view('backend.visimisi.show', compact('data'),[
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
        $data = visimisi::findOrFail($id);
        return view('backend.visimisi.edit', compact('data'),[
            'title' => 'Edit'
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
            'visi' => 'required',
            'bodyvisi' => 'required',
            'misi' => 'required',
            'bodymisi' => 'required',

        ]);
        

        $visimisis = visimisi::findOrFail($id);
        $visimisis->visi = $request->visi;
        $visimisis->bodyvisi = $request->bodyvisi;
        $visimisis->misi = $request->misi;
        $visimisis->bodymisi = $request->bodymisi;


        $visimisis->save();

        return redirect('/dashboard/visimisi')->with('success', 'data editing successfully !!');
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
        
        $visimisis = visimisi::findOrFail($id);
        $visimisis->delete();
        return redirect('dashboard/visimisi')
            ->with('success', 'Data berhasil dihapus!');
    }
}
