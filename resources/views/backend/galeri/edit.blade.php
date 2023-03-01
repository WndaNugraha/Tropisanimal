@extends('layouts.dashboard')

@section('isi')
<form action="{{ route('galeri.update', $data->id)  }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <header class="bg-header">
        <div class="card-body">
            <div class="container pt-5 pb-5">
                <h1 class="text-light"><b>Edit Galeri</b></h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class=" col-lg-10 ">
                <div class="card  shadow" style="border-radius: 1rem;">

                    <div class="card-body p-4 p-lg-5 text-black">
                        <!-- <div class="form-outline mb-4 form-floating">
                            <label class="form-label">Upload Image</label>
                            <input type="hidden" name="oldimage" value="{{ $data->image }}">
                            <input class="form-control form-control-lg @error('image') is-invalid @enderror"
                                value="{{ asset('storage/' . $data->image) }}" id="formFileLg" type="file" name="image">
                            @error('image')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div> -->

                        <div class="input-group">
                                <span class="input-group-btn">
                                    <a
                                        id="lfm"
                                        data-input="thumbnail"
                                        data-preview="holder"
                                        class="btn btn-outline-secondary">
                                        <i class="fa fa-picture-o"></i>
                                        Choose
                                    </a>
                                </span>
                                <input id="thumbnail"  class="form-control @error('image') is-invalid @enderror" type="text" name="image"  > 
                                @error('image')
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
            </div>
        </div>
    </header>
</form>

@endsection

@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>var route_prefix = "../../../laravel-filemanager";
 $('#lfm').filemanager('image', {prefix: route_prefix});</script>
@endsection