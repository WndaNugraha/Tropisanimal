<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registercontroller extends Controller
{
    //
    public function index(){
        return view('login.register',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'role' => '',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
            'image' => 'image|file|max:1024'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['image'] = $request->file('image')->move('images/profile/'); 
        // if ($request->hasFile('image')) {
        //     $foto = $request->file('image');
        //     $name = rand(1000, 9999) . $foto->getClientOriginalName();
        //     $foto->move('images/profile/', $name);
        //     $validatedData->image = $name;
        // }


        // User::create($validatedData);
        $users = new User();
        $users->name = $request->name;
        $users->role = $request->role;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        if ($request->hasFile('image')) {
            $foto = $request->file('image');
            $name = rand(1000, 9999) . $foto->getClientOriginalName();
            $foto->move('images/profile/', $name);
            $users->image = $name;
        }

        $users->save();
        return redirect('/login')->with('success', 'Registration successful! Please login');

    }
}
