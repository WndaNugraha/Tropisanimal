@extends('layouts.dashboard')

@section('isi')
<form action="{{ route('kategori.update', $data->id) }}" method="post">
    @csrf
    @method('put')
    <header class="bg-header">
        <div class="card-body">
            <div class="container pt-5 pb-5">
                <h1 class="text-light"><b>Edit Kategori</b></h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class=" col-lg-10 ">
                <div class="card  shadow" style="border-radius: 1rem;">

                    <div class="card-body p-4 p-lg-5 text-black">

                        <div class="form-outline mb-4 form-floating">
                            <label class="form-label" for="floatingInput">Kategori</label>
                            <input type="text" id="kategori" name="kategori"
                                class="form-control form-control-lg @error('kategori') is-invalid @enderror" required
                                value="{{ $data->kategori }}" autofocus />
                            @error('kategori')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="button-solid btn btn-lg btn-block" style="--clr:#009900"
                                type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
    </header>
</form>

@endsection