@extends('layouts.dashboard')

@section('isi')
<header class="bg-header">
    <div class="card-body">
        <div class="container pt-5 pb-5">
            <h1 class="text-light"><b>Edit Visi Misi</b></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2> {{$data->visi}}</h2>
                    {!! $data->bodyvisi !!}

                    <br>
                    <br>

                    <h2>{{$data->misi}}</h2>
                    {!! $data->bodymisi !!}
                </div>
            </div>
            <div class="mb-3">
                <div class="d-grid gap-2">
                    <a href="/dashboard/visimisi" class="button-solid btn btn-lg btn-block" style="--clr:#009900"
                        type="submit">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection