<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
 

class beritacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $databerita = berita::latest()->Filter(request(['search']));
        return view('backend.berita.index',[
            'title' => 'Berita',
            'data' => $databerita->paginate(6)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.berita.create',[
            'title' => 'Create',
            'kategori' => Kategori::all()
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
            'title' => 'required|unique:beritas',
            'body' => 'required',
            'image' => 'required',
            'id_kategori' => 'required',

        ]);            
        
        $beritas = new berita();
        $beritas->title = $request->title;
        $beritas->body = $request->body;
        $beritas->id_kategori = $request->id_kategori;
        $beritas->excerpt = Str::limit(strip_tags($request->body), 80, '...');
        $beritas->excerpttitle = Str::limit(strip_tags($request->title), 45, '...');
        // if ($request->hasFile('image')) {
        //     $foto = $request->file('image');
        //     $name = rand(1000, 9999) . $foto->getClientOriginalName();
        //     $foto->move('images/berita/', $name);
        //     $beritas->image = $name;
        // }
        $beritas->image = $request->image;
        $beritas->save();
            $kategoris = Kategori::FindOrFail($request->id_kategori);
            $kategoris->save();

        return redirect('/dashboard/berita')->with('success', 'data created successfully!!');
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
        $data = berita::findOrFail($id);
        return view('backend.berita.show', compact('data'),[
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
        $data = berita::findOrFail($id);
        $kategori = Kategori::all();
        return view('backend.berita.edit', compact('data','kategori'),[
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
            'title' => 'required',
            'image' => 'required',
            'body' => 'required',
            'image' => 'required'

        ]);
        
        
            
        

        $beritas = berita::findOrFail($id);
        $beritas->title = $request->title;
        // if ($request->hasFile('image')) {
        //     $beritas->deleteImage(); //menghapus foto
        //     $foto = $request->file('image');
        //     $name = rand(1000, 9999) . $foto->getClientOriginalName();
        //     $foto->move('images/berita/', $name);
        //     $beritas->image = $name;
        // }
        $beritas->image = $request->image;
        $beritas->body = $request->body;
        $beritas->excerpt = Str::limit(strip_tags($request->body), 80, '...');
        $beritas->excerpttitle = Str::limit(strip_tags($request->title), 45, '...');

        $beritas->save();

        return redirect('/dashboard/berita')->with('success', 'data created successfully!!');
    
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
        
        $beritas = berita::findOrFail($id);
        if ($beritas->image) {
            $beritas->deleteImage();
        }
        $beritas->delete();
        return redirect('/dashboard/berita')
            ->with('success', 'Data berhasil dihapus!');
    }
}
 
