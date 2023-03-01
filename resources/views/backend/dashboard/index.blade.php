@extends('layouts.dashboard')

@section('isi')


<center class="align-">
    
<h2>hallo, Selamat datang Admin</h2> 
    <h2>{{ auth()->user()->username }}</h2>
    <br>
</center>



@endsection