@extends('layouts.main')

@section('konten')

<div class="banner-image3 w-100">
    <div class="container-xl header-image">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-6">
                <h1>Show Berita</h1>
            </div>
        </div>
    </div>
</div>

<div class="content-overlay py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
    <div class="d-inline"><img src="{{  $berita->image  }}" alt=""
        class="img-fluid d-inline" style="Height:auto;"> 
            <h1><b> {{$berita->title}} </b></h1>
        </div>
                    </div>
                    <br>
                    {!! $berita->body !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-overlay py-5">
<div class="row pt-5">
    @foreach($kontak as $data)
        <div class="col-lg-6 col-md-6 col-sm-12 pt-4">
            <div class="card">
                <div class="card-body">
                <h5>{{ $data->nama }}</h5>
                    <b>{{ $data->subject }}</b><br>
                    {{ $data->excerpt }} <br>
                    <button class="btn btn-default text-primary" id="btn-comment">balas</button>

                    <form action="" method="post" id="comment" style="display:none">
                        @csrf
                        <textarea name="comment" class="form-control" ></textarea>
                        <input type="submit" class="btn btn-success" >
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>

@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    $('#btn-comment').click(function(){
        $('#comment').toggle('slide');
    });
  }); 
</script>
@endsection