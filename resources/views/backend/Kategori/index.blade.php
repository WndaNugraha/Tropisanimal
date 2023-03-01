@extends('layouts.dashboard')

@section('isi')

<header class="bg-header">
    <div class="container">

        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-6  pt-5">
                    <h1 class="text-light"><b>Data Kategori</b></h1>
                </div>
                <div class=" col-6  pt-5">
                    <button type="button" class="btn btn-light " style="float: right;"><a
                            href="{{route('kategori.create')}}" class="text-dark">
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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-8"></div>
                            <div class="col-sm-12 col-md-8 col-lg-4">
                                <form action="/dashboard/kategori/#search">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search..." name="search"
                                            value="{{ request('search') }}" id="search">
                                        <button class="btn btn-success" type="submit"><i
                                                class="bi bi-search h5"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive" id="no-more-tables">
                            <table class="table align-middle" id="dataTable">
                                @if($kategori->count())
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($kategori as $data)
                                    <tr>
                                        <td data-title="No">{{ $no++ }}</td>
                                        <td data-title="Title">{{$data->kategori}}</td>
                                        <td data-title="Action">
                                            <form action="{{ route('kategori.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('kategori.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> |
                                                <a href="{{ route('kategori.show', $data->id) }}"
                                                    class="btn btn-sm btn-outline-warning">
                                                    Show
                                                </a> |
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                <h4 class="text-center">kategori Tidak Ada.</h4>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection