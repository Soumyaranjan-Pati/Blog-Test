@extends('admin.layouts.admin')
@section('title', 'Admin Dashboard Page')
@section('content')



<!-- START SECTION CONTACT -->
<section>
	<div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-8 mt-4 mt-lg-0">
            	<div class="field_form animation" data-animation="fadeInLeft" data-animation-delay="0.1s">

            @include('users.auth.alert')

                <form  method="POST" action="{{ route('admin.update_user') }}" class="login_form ">

                    @csrf

                       <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>First Name<span class="required">*</span></label>
                                <input type="text" required class="form-control" name="firstname" value="{{$user_details->first_name}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" required class="form-control" name="lastname" value="{{$user_details->last_name}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Email address <span class="required">*</span></label>
                                <input type="email" required class="form-control" name="email" value="{{$user_details->email}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Status <span class="required">*</span></label>
                                <input class="form-control" required type="text" name="status" value="{{$user_details->status}}">
                            </div>
                        </div>
        
                        <input type="hidden" class="form-control" required name="id" value="{{$user_details->id}}" >
                        <input type="hidden" class="form-control" required name="dob" value="{{$user_details->dob}}" >
                        <input type="hidden" class="form-control" required name="is_verified" value="{{$user_details->is_verified}}" >




                    </div>

                    <div class="form-group mt-6 mb-6">
                        <button type="submit" class="mt-5 fs-5 btn btn-success btn-radius w-100" value="User Update">Update</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->

@endsection
