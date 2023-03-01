@extends('layouts.main')

@section('konten')

<!-- background atas -->
<div class="banner-image3 w-100">
    <div class="header-image">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-6">
                <h1>Galeri</h1>
            </div>
        </div>
    </div>
</div>

<!-- content slide -->
<div class="content-overlay py-5" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up">
    <div id="carouselExampleControlsNoTouching" class="carousel slide " data-bs-touch="false">
        <div class="box-box">
            <div class="carousel-inner ">
                <div class="carousel-item active " align="center">
                    <img src="{{ asset('ASET/x1/hs.png')}}" alt="" class="img-fluid d-block">
                </div>
                <div class="carousel-item " align="center">
                    <img src="{{ asset('ASET/x1/buaya.png')}}" alt="" class="img-fluid d-block">
                </div>
            </div>
            <button class="carousel-control-prev ms-2" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <p class=""><span class="bi bi-arrow-left prev h4 px-2 py-1" aria-hidden="true"></span></p>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next me-2" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <p class=""><span class="bi bi-arrow-right next h4 px-2 py-1" aria-hidden="true"></span></p>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- content galeri -->

<div class="content-overlay mb-5" id="1">
    <div class="row pb-5">
        @foreach($datagaleri as $data)
        <div class="col-sm-6 col-md-6 col-lg-3 pt-4 ">
            <div class="show-img box-image" data-aos-duration="1100" data-aos-anchor-placement="top-bottom"
                data-aos="zoom-in">
                <a href="{{ $data->image  }}" data-lightbox="roadtrip">
                    <img src="{{ $data->image  }}" alt="">
                </a>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center pt-4" data-aos-duration="1100" data-aos-anchor-placement="top-bottom"
            data-aos="fade-up">
            {{ $datagaleri->links() }}
        </div>
    </div>
</div>
@endsection