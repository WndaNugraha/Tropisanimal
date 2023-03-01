@extends('layouts.dashboard')

@section('isi')
<header class="bg-header">
    <div class="container">
        <div class="card-body">
            <div class="pt-5 pb-5">
                <h1 class="tex-light"><b>Show Galeri</b></h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <div class=""><img src="{{ $data->image  }}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-grid gap-2">
                        <a href="/dashboard/galeri" class="button-solid btn btn-lg btn-block" style="--clr:#009900"
                            type="submit">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection