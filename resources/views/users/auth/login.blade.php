@extends('frontend.layouts.admin')

@section('title', 'User Login')

@section('content')


<!-- START SECTION CONTACT -->
<section>
	<div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-6 mt-4 mt-lg-0">
            	<div class="field_form animation" data-animation="fadeInLeft" data-animation-delay="0.1s">

                    @include('users.auth.alert')

                    <form class="login-form" method="POST" action="{{ route('user.auth.login')}}">
                        @csrf
                    <div class="form-group">
                        <label>Email id<span class="required">*</span></label>
                        <input type="text" required class="form-control" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label>Password <span class="required">*</span></label>
                        <input class="form-control" required type="password" name="password">
                    </div>

                    <div class="form-group mt-4 mb-4">
                        <button type="submit" class="btn btn-default btn-radius w-100" name="login" value="Log in">Sign In</button>
                    </div>
                </form>
                    <div class="text-center">
                        <p>Don't have an account ? <a href="{{ route('user.register') }}" style="color: #800020">Sign Up</a></p>
                    </div>

                    </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->



@endsection
