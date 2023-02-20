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
                                   <a href="index.html"> <img  src="{{ asset('assets/images/logo.png')}}" alt="logo"></a>
                                </div>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8"> Admin Register</h1>

                                </div>
                              @include('admin.auth.alert')
                                <form class="mb-2" action="{{route('admin.register.store')}}" novalidate method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>First Name<span class="required">*</span></label>
                                                <input type="text" required class="form-control" name="firstname" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" required class="form-control" name="lastname" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Email address <span class="required">*</span></label>
                                                <input type="email" required class="form-control" name="email" value="">
                                            </div>
                                        </div>
                                          <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Password <span class="required">*</span></label>
                                                <input type="password" required class="form-control" name="password" value="">
                                            </div><br>
                                          </div>

                                          <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label>DOB</label>
                                                <input type="date" class="form-control" required name="dob" >
                                            </div>
                                        </div>

                                          <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger" value="Register">Register</button>
                                            </div>
                                          </div>
                                           </form>
                                            <div class="text-center">
                                                <p>Already have an account ? <a href="{{ route('admin.login') }}" style="color: #800020">Sign In</a></p>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
