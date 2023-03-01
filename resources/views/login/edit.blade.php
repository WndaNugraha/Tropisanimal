@extends('layouts.dashboard')

@section('isi')
<header class="bg-header">
    <div class="container">
        <div class="card-body">
            <div class="container pt-5 pb-5">
                <h1 class="text-light"><b>Profile</b></h1>
            </div>
        </div>
        <div class="container px-5 pb-5">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <img class="img-profile rounded-circle" src="{{ asset(auth()->user()->image()) }}"
                                width="200px">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-9">
                            <h1>{{ auth()->user()->username }}</h1>
                            {{ auth()->user()->name }}
                            <p><i class="bi bi-envelope "></i> <a
                                    href="https://mail.google.com/">{{ auth()->user()->email }}</a> -
                                {{ auth()->user()->role }}
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2>Account</h2>
                    <br>
                    <form action="" method="post">
                        <div class="row pb-5">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <h5>Username</h5>
                                <br>
                                <h5>Email</h5>
                                <br>
                                <h5>Password</h5>
                                <br>
                                <h5>Full Name</h5>
                                <br>
                                <h5>Role</h5>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-5">
                                <input type="text" value="{{ auth()->user()->name }}" class="form-control">
                                <br>
                                <input type="text" value="{{ auth()->user()->email }}" class="form-control">
                                <br>
                                <input type="password" value="{{ auth()->user()->password }}" class="form-control">
                                <br>
                                <input type="text" value="{{ auth()->user()->name }}" class="form-control">
                                <br>
                                <input type="text" value="{{ auth()->user()->role }}" class="form-control">
                            </div>
                            <button type="button" class="btn button-solid " style="float: right;">
                                    Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection