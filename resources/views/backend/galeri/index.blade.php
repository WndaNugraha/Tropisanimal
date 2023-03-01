@extends('layouts.dashboard')

@section('isi')

<header class="bg-header">
    <div class="container">

        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-6  pt-5">
                <h1 class="text-light"><b>Data Galeri</b></h1>
                </div>
                <div class=" col-6  pt-5">
                    <button type="button" class="btn btn-light " style="float: right;"><a
                            href="{{route('galeri.create')}}" class="text-dark">
                            Tambah Data <i class="bi bi-plus"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="">

                    <div class="card-body ">
                        <div class="row">
                            @foreach($datagaleri as $data)
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 pt-3">
                                <div class="card text-center shadow w-100" style=" height:15rem;">
                                    <div class="card-img-top box-image">
                                        <img src="{{ $data->image  }}" alt="" class="w-100"
                                            height="200px" class="img-fluid">
                                    </div>
                                    <div class="card-body ">
                                        <form action="{{ route('galeri.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('galeri.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">
                                                Edit
                                            </a> |
                                            <a href="{{ route('galeri.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-warning">
                                                Show
                                            </a> |
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-center pt-4">
                            {{ $datagaleri->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    @endsection