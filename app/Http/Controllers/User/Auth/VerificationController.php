<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserVerify;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{

    public function verifyAccount($token) {//sp
        $verifyUser = UserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if(isset($verifyUser) ){
            $user = $verifyUser->user;

            if(!$user->is_verified) {
                $verifyUser->user->is_verified = 1;
                $verifyUser->user->status = 1;

                $date = date("Y-m-d g:i:s");
                $verifyUser->user->email_verified_at = $date; 
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect()->route('user.login')->with('success', $message);
    }
}
