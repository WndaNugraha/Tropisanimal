@extends('layouts.main')

@section('konten')

<!-- background atas -->
<div class="banner-image3 w-100" id="#">
    <div class="header-image">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-6">
                <h1>Kontak Kami</h1>
            </div>
        </div>
    </div>
</div>

<!-- map -->
<div class="content-overlay py-5" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.23522712826!2d107.6639873!3d-6.9432114!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f5160f6c9796e4b!2sCyberLabs%20-%20Konsultan%20Digital%20Marketing%20%2FPengembangan%20Website%2FIOS!5e0!3m2!1sid!2sid!4v1667891197276!5m2!1sid!2sid"
        width="100%" height="286" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class=" w-100" alt="{{asset('ASET/x1/map.png')}}"></iframe>








    <!-- Form Kontak Kami -->
    <div class="row pt-5">
        <div class="col-12">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="kontak">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{ route('kontak.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-lg-8 ">
                        <div class="form-floating" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up">
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                placeholder="Deskripsi" id="deskripsi" style="height: 300px;" name="deskripsi"
                                value="{{ old('deskripsi') }}"></textarea>
                            <label for="deskripsi">Deskripsi</label>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4 ">

                        <div class="pt-small-1">
                            <div class="form-outline form-floating" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up"
                                data-aos-delay="100">
                                <input type="text" id="floatingInput" name="subject"
                                    class="form-control form-control-lg @error('subject') is-invalid @enderror" required
                                    value="{{ old('subject') }}" />
                                <label for="floatingInput">Subject</label>
                                @error('subject')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-4">
                            <div class="form-outline form-floating" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up"
                                data-aos-delay="200">
                                <input type="text" id="nama" name="nama"
                                    class="form-control form-control-lg @error('nama') is-invalid @enderror" required
                                    value="{{ old('nama') }}" />
                                <label class="form-label" for="floatingInput">Nama</label>
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-4">
                            <div class="form-outline form-floating" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up"
                                data-aos-delay="300">
                                <input type="text" id="email" name="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror" required
                                    value="{{ old('email') }}" />
                                <label class="form-label" for="floatingInput">email</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-4" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up" data-aos-delay="400">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg button-solid">Kirim</button>
                            </div>
                        </div>

                    </div>
                </div>
        </div>

        </form>
    </div>

    <!-- kontak -->
    <div class="row pt-5">
        <div class="col-sm-4 col-sm-4 col-md-4 col-lg-4" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up">
            <a href="https://mail.google.com/" class="text-decoration-none text-white">
                <div class="btn btn-outline-light text-dark text-center d-flex justify-item-center w-100">
                    <div class="card-body py-3 pb-3">
                        <button class="btn rounded-circle"
                            style="background-color: #009900; color:white; width:60px; height:60px;"><i
                                class="bi bi-envelope h4"></i></button>
                        <div class="card-title">
                            <p><b>Email</b>
                            </p>
                        </div>
                        <div class="card-item ">
                            <p>Tropisanimal@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up" data-aos-delay="200">
            <a href="https://web.whatsapp.com/" class="text-decoration-none text-white">
                <div class="btn btn-outline-light text-dark text-center d-flex justify-item-center w-100">
                    <div class="card-body py-3 pb-3">
                        <button class="btn rounded-circle"
                            style="background-color: #009900; color:white; width:60px; height:60px;"><i
                                class="bi bi-telephone h4"></i></button>
                        <div class="card-title">
                            <p><b>Phone</b>
                            </p>
                        </div>
                        <div class="card-item ">
                            <p>+62 812 3456 7890</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4" data-aos-duration="1100" data-aos-anchor-placement="top-bottom" data-aos="fade-up" data-aos-delay="400">
            <a href="https://www.google.com/maps/place/CyberLabs+-+Konsultan+Digital+Marketing+%2FPengembangan+Website%2FIOS/@-6.9432114,107.6639873,15z/data=!4m5!3m4!1s0x0:0x5f5160f6c9796e4b!8m2!3d-6.9432114!4d107.6639873"
                class="text-decoration-none text-white">
                <div class="btn btn-outline-light text-dark text-center d-flex justify-item-center w-100">
                    <div class="card-body py-3 pb-3">
                        <button class="btn rounded-circle"
                            style="background-color: #009900; color:white; width:60px; height:60px;"><i
                                class="bi bi-geo-alt h4"></i></button>
                        <div class="card-title">
                            <p><b>Location</b>
                            </p>
                        </div>
                        <div class="card-item ">
                            <p>Kota Bandung, Jawabarat, Indonesia</p>
                        </div>
                    </div>
                </div>
        </div>
        </a>
    </div>
</div>

@endsection

