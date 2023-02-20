<?php

namespace App\Listerners;

use App\Events\UserEmailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\AddUsertSignupMail;
use Session;
use App\Mail\AddUserSignupAdminMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
class UserEmailListener 
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserEmailEvent  $event
     * @return void
     */
    public function handle(UserEmailEvent $event)
    {
        //
        // dd($event->data['email']);
        $email=$event->data['email'];
        // Mail::send('email.emailVerificationEmail', ['token' =>$event->data['token']], function($message) use($email){
        //     $message->to($email);
        //     $message->subject('Email Verification Mail');
        // });
       
        Mail::to($email)->send(new UserMail($event->data));
        // dd('ssss');
    }
}
