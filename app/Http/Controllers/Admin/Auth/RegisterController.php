<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Mail\AddUsertSignupMail;
use Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function register(Request  $request) {
        return view('admin.auth.register');
    }

    public function store(Request $request) {
//print_r("register"); die;

        $request->validate([

            'firstname' => ['required',],
            'email' => ['required','unique:admins'],
            'password' => ['required'],
        ]);

        $data =Admin::create([
            'first_name'  => $request->firstname,
            'last_name'   => $request->lastname,
            'email'       => $request->email,
            'password'    => Hash::make($request->password),
            'dob'       => $request->dob,

        ]);

        return redirect()->route('admin.login')->with('success', __('You have registered successfully!'));
    }

}
