

@extends('admin.layouts.admin')
@section('title', 'Admin Dashboard Page')
@section('content')



<!-- START SECTION REG FORM BY USER -->
<section>
	<div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-8 mt-4 mt-lg-0">
            	<div class="field_form animation" data-animation="fadeInLeft" data-animation-delay="0.1s">

            @include('users.auth.alert')

                    <form  method="POST" action="{{ route('admin.user_store') }}" class="login_form ">
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
                                <input class="form-control" required type="password" name="password">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>DOB.<span class="required">*</span></label>
                                <input type="date" class="form-control" required name="dob" >
                            </div>
                        </div>



                    </div>

                    <div class="form-group mt-6 mb-6">
                        <button type="submit" class="btn btn-success mt-5 fs-5 btn-radius w-100" value="Register">Register</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
</section>
<!-- END SECTION REG FORM -->

@endsection


