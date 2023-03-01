<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeri;
use Illuminate\Support\Facades\Storage;

class galericontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datagaleri = galeri::latest();
        return view('backend.galeri.index',[
            "title" => 'Galeri',
            'datagaleri' => $datagaleri->paginate(8)->withQueryString()
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
        return view('backend.galeri.create',[
            "title" => 'Create'
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
            'image' => 'required',
            
        ]);

        $galeris = new galeri();
        $galeris->image = $request->image;
        $galeris->save();

        return redirect('/dashboard/galeri')->with('success', 'data created successfully!!');
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
        $data = galeri::findOrFail($id);
        return view('backend.galeri.show', compact('data'),[
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
        $data = galeri::findOrFail($id);
        return view('backend.galeri.edit', compact('data'),[
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

            'image' => 'required'

        ]);
        
        $galeris = galeri::findOrFail($id);
        // if ($request->hasFile('image')) {
        //     $galeris->deleteImage(); //menghapus foto
        //     $foto = $request->file('image');
        //     $name = rand(1000, 9999) . $foto->getClientOriginalName();
        //     $foto->move('images/galeri/', $name);
        //     $galeris->image = $name;
        // }
        $galeris->image = $request->image;
        $galeris->save();

        return redirect('/dashboard/galeri')->with('success', 'data created successfully!!');
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
        $galeris = galeri::findOrFail($id);
        if ($galeris->image) {
            $galeris->deleteImage();
        }
        $galeris->delete();
        return redirect('dashboard/galeri')
            ->with('success', 'Data berhasil dihapus!');
    }
}
