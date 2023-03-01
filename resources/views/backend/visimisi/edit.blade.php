@extends('layouts.dashboard')

@section('isi')
<form action="{{ route('visimisi.update', $data->id) }}" method="post">
    @csrf
    @method('put')
    <header class="bg-header">
        <div class="card-body">
            <div class="container pt-5 pb-5">
                <h1 class="text-light"><b>Edit Visi Misi</b></h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class=" col-lg-10 ">
                <div class="card  shadow" style="border-radius: 1rem;">

                    <div class="card-body p-4 p-lg-5 text-black">

                        <div class="form-outline mb-4 form-floating">
                            <input type="text" id="visi" name="visi"
                                class="form-control form-control-lg @error('visi') is-invalid @enderror" required
                                value="{{ $data->visi }}" autofocus />
                            <label class="form-label" for="floatingInput">Visi</label>
                            @error('visi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label">Content Visi</label>
                            <input id="bodyvisi" type="hidden" name="bodyvisi"
                                class="form-control  @error('bodyvisi') is-invalid @enderror"
                                value="{!! $data->bodyvisi !!}" />
                            <trix-editor input="bodyvisi"></trix-editor>
                            @error('bodyvisi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-outline mb-4 form-floating">
                            <input type="text" id="misi" name="misi"
                                class="form-control form-control-lg @error('misi') is-invalid @enderror" required
                                value="{{ $data->misi }}" />
                            <label class="form-label" for="floatingInput">Misi</label>
                            @error('misi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <div class="form-outline mb-4">
                            <label class="form-label">Content Misi</label>
                            <input id="bodymisi" type="hidden" name="bodymisi"
                                class="form-control  @error('content') is-invalid @enderror"
                                value="{!! $data->bodymisi !!}" />
                            <trix-editor input="bodymisi"></trix-editor>
                            @error('bodymisi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
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


<script>
document.addEvenListener('trix-file-accept', function(e) {
    e.preventDefault();
})
</script>

@endsection