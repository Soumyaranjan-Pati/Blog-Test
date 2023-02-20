<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Auth\VerificationController;
use App\Http\Controllers\User\Auth\ForgotPasswordController;
use App\Http\Controllers\User\Auth\ResetPasswordController;
use App\Http\Controllers\User\DashboardController;


Route::prefix('/user')->name('user.')->namespace('User')->group(function() {
    Route::middleware('guest:user')->namespace('Auth')->group(function() {
        //Login Routes
        Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
        //Register Routes
        Route::get('/register', [RegisterController::class, 'register'])->name('register');
        Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

        Route::get('/verify/{token}', [VerificationController::class, 'verifyAccount'])->name('email.verify');
    });

    Route::middleware('auth:user')->group(function () {
        Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
    
});

