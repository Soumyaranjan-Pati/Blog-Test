@extends('admin.layouts.admin')

@section('content')
    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->
    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="d-block d-lg-none text-center text-lg-start">
                                    <a href="index.html"> <img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                                </div>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Sign In</h1>
                                </div>
                                @include('admin.auth.alert')
                                <form class="mb-2" action="{{ route('admin.auth.login') }}" novalidate method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Enter email" name="email"
                                            autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Enter password"
                                            name="password" required>
                                    </div>
                                    <div class="text-center text-lg-start">

                                        <br> <button class="btn btn-primary" type="submit">Sign In</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div
                        class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                        <div class="logo">
                            <br><br><br><br>
                            <h3 class="fw-bold">Welcome to Admin page</h3>
                            <p class="lead my-5">If you don't have an account, would you like to register right now?</p>

                            <a href="{{ route('admin.register') }}" class="btn btn-primary">Sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
