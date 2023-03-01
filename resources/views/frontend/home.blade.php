@extends('layouts.main')

@section('konten')

<!-- background atas -->
<div class="banner-image ">
    <div class=" header-image">
        <div class="row">
            <div class="col-md-12 col-lg-5 text-white ">
                <h1>Hewan Tropis di Dunia</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A amet mollitia sint quidem
                    asperiores
                    ut unde iste nobis perspiciatis! Reiciendis.</p>
            </div>
        </div>
    </div>
</div>
<div class=" content-overlay" id="1">
    <div class="row  pt-3">
        <div class="col-md-12 col-lg-6 ">
            <div class="py-5">
                <h5>
                    <p class="text-green" data-aos-duration="1100" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom">Tentang Kami</p>
                </h5>
                <h1 data-aos-duration="1100" data-aos="fade-up" data-aos-delay="50"
                    data-aos-anchor-placement="top-bottom">{{$dataartikel->title}}</h1>
                <p data-aos-duration="1100" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="top-bottom"><b>{{$dataartikel->subtitle}}</b></p>
                <p data-aos-duration="1100" data-aos="fade-up" data-aos-delay="150"
                    data-aos-anchor-placement="top-bottom">{!!$dataartikel->excerpt!!}</p>
                <a href="/Showartikel/{{$dataartikel['slug']}}" style="--clr:#009900" class="button-outline btn"
                    data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up"
                    data-aos-delay="200">
                    Lihat Selengkapnya<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>


        <div class="col-md-12 col-lg-6 ">
            <div class="py-5">
                <div class="row show">
                    <div class="col-sm-6 col-md-6 col-lg-6 ">
                        <div class="show-img " data-aos-duration="1100" data-aos-anchor-placement="top-bottom"
                            data-aos="fade-up">
                            <a href="ASET/x1/gajah2.png" data-lightbox="roadtrip">
                                <img src="ASET/x1/gajah2.png" alt="" class="w-100 image">
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 pt-small-2">
                        <div class="show-img " data-aos-duration="1100" data-aos-anchor-placement="top-bottom"
                            data-aos="fade-up" data-aos-delay="100">
                            <a href="ASET/x1/biawak.png" data-lightbox="roadtrip">
                                <img src="ASET/x1/biawak.png" alt="" class="w-100 image">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12  col-lg-12 pt-4 ">
                        <div class="show-img" data-aos-duration="1100" data-aos-anchor-placement="top-bottom"
                            data-aos="fade-up" data-aos-delay="100">
                            <a href="ASET/x1/buaya.png" data-lightbox="roadtrip">
                                <img src="ASET/x1/buaya.png" alt="" class="w-100 image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-3 mb-5">
    <div class="banner-image2 w-100 pb-5">
        <div class="py-5 content-overlay">
            <div class="row ">
                <div class="col-md-12 col-lg-7 text-white ">
                    <h1 data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up">Kami Membawa
                        Anda Untuk Mengetahui Lebih Dalam</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-6 col-md-6 col-lg-3 pt-3" data-aos-duration="1100"
                    data-aos-anchor-placement="top-bottom" data-aos="fade-up">
                    <div class=" card card-show text-center d-flex justify-item-center w-100">
                        <div class="card-body py-3 pb-3">
                            <button class="btn rounded-circle circle"><i class="fa-solid fa-paw h3 pt-2"></i></button>
                            <div class="card-title">
                                <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, beatae?</b>
                                </p>
                            </div>
                            <div class="card-item ">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit porro
                                    similique facilis dignissimos iusto voluptatibus dolor nesciunt mollitia quam eos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 pt-3" data-aos-duration="1100"
                    data-aos-anchor-placement="top-bottom" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-show text-center d-flex justify-item-center w-100">
                        <div class="card-body py-3 pb-3">
                            <button class="btn rounded-circle circle"><i class="fa-solid fa-paw h3 pt-2"></i></button>
                            <div class="card-title">
                                <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, beatae?</b>
                                </p>
                            </div>
                            <div class="card-item ">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit porro
                                    similique facilis dignissimos iusto voluptatibus dolor nesciunt mollitia quam eos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 pt-3" data-aos-duration="1100"
                    data-aos-anchor-placement="top-bottom" data-aos="fade-up" data-aos-delay="400">
                    <div class="card card-show text-center d-flex justify-item-center w-100">
                        <div class="card-body py-3 pb-3">
                            <button class="btn rounded-circle circle"><i class="fa-solid fa-paw h3 pt-2"></i></button>
                            <div class="card-title">
                                <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, beatae?</b>
                                </p>
                            </div>
                            <div class="card-item ">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit porro
                                    similique facilis dignissimos iusto voluptatibus dolor nesciunt mollitia quam eos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 pt-3" data-aos-duration="1100"
                    data-aos-anchor-placement="top-bottom" data-aos="fade-up" data-aos-delay="600">
                    <div class="card card-show text-center d-flex justify-item-center w-100">
                        <div class="card-body py-3 pb-3">
                            <button class="btn rounded-circle circle"><i class="fa-solid fa-paw h3 pt-2"></i></button>
                            <div class="card-title">
                                <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, beatae?</b>
                                </p>
                            </div>
                            <div class="card-item ">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit porro
                                    similique facilis dignissimos iusto voluptatibus dolor nesciunt mollitia quam eos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=" content-overlay pb-5">
    <div class="row" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up">
        <div class="col-md-12 col-lg-6">
            <h5><b class="text-green">Berita</b></h5>
            <h1>Baca Berita Terbaru dari Tropisanimal</h1>
        </div>
    </div>


    <div class="row ">

        

        @foreach($databerita as $data)
        <div class="col-sm-6 col-md-6 col-lg-4 py-4 ">
            <div class="col-up">
                <a href="/Showberita/{{$data['slug']}}" class="text-decoration-none">
                <div class="card card-show w-100" style="height: 21rem;" data-aos-duration="1100"
                        data-aos-anchor-placement="top-bottom" data-aos="zoom-in">
                        <div class="card-img-top w-100 ">
                            <img src="{{  $data->image  }}" alt="" class="img-fluid berita-image">
                        </div>
                        <div class="card-body ">
                            <b>
                                <h5>{{$data->excerpttitle}}</h5>
                            </b>
                            <p class="card-text ">{!!$data->excerpt!!}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach

    </div>
    <div class="d-flex justify-content-end" data-aos-duration="1100" data-aos-anchor-placement="top-bottom"
        data-aos="zoom-in">
        <a href="/berita/#berita" class=" btn button-solid">Berita Lainnya<i class="bi bi-arrow-right"></i></a>
    </div>
</div>


<div class="container-xl content-overlay  pb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8" data-aos-duration="1100" data-aos-anchor-placement="top-bottom"
            data-aos="fade-up">
            <h5><b class="text-green">Galeri</b></h5>
            <h1>Lihat Lebih Banyak Hewan Tropis Pada Galeri Kami</h1>
        </div>
    </div>
</div>

<div class="slick_img" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos="fade-up">
    @foreach($datagaleri as $data)
    <div class="">
        <a href="{{  $data->image  }}" data-lightbox="models">
            <img src="{{  $data->image  }}" alt="" class="img-fluid w-100" style="height: 230px;">
        </a>
    </div>
    @endforeach
</div>



@endsection