<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\Notifications\AdminResetPasswordNotification as Notification;
use App\Notifications\AdminResetPasswordNotification;
use App\Notifications\PasswordResetNotification;

class Admin extends Authenticatable {

    use SoftDeletes,
    Notifiable;

    protected $guard = 'admin';
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'dob'

    ];

    public function get_admin() {
        return Admin::where('status', 1)->first();
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }
}
