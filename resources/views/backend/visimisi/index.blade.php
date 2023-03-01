@extends('layouts.dashboard')

@section('isi')

<header class="bg-header">
    <div class="container">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-6  pt-5">
                    <h1 class="text-light"><b>Data Visi Misi</b></h1>
                </div>
                <div class=" col-6  pt-5">
                    <button type="button" class="btn btn-light " style="float: right;"><a
                            href="{{route('visimisi.create')}}" class="text-dark">
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
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{!! $data->excerptvisi !!}</td>
                                        <td>{!! $data->excerptmisi !!}</td>
                                        <td>
                                            <form action="{{ route('visimisi.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('visimisi.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> |
                                                <a href="{{ route('visimisi.show', $data->id) }}"
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection