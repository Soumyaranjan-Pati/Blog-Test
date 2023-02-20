<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Mail\AddUsertSignupMail;
use Session;
use App\Mail\AddUserSignupAdminMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserVerify;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Events\UserEmailEvent;
use DB;

class RegisterController extends Controller
{

    public function register(Request  $request) {
        return view('users.auth.register');
    }

    public function store(Request $request) {
        $request->validate([
            'firstname' => ['required',],
            'lastname' => ['required',],
            'email' => ['required','unique:users'],
            'password' => ['required'],
        ]);

        DB::beginTransaction();

        try {

        $user_data = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dob'=>$request->dob,
        ]);


        $token = Str::random(64);
       

        UserVerify::create([
            'user_id' => $user_data->id,
            'token' => $token
        ]);

        
        $data=[
            'token' => $token, 'email' => $request->email, 
        ];
        event(new UserEmailEvent($data));

        DB::commit();
        return redirect()->route('user.login')->with('success', __('You have registered successfully!'));
    } catch (\Exception $e) {
        DB::rollback();
        return redirect()->route('user.login')->with('success', 'Something went wrong!!');
    }
   
    }

}
