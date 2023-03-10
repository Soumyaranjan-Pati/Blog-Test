<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/admin', [LoginController::class, 'showLoginForm'])->name('login');

// User Routes
require_once 'user.php';
// Admin Routes
require_once 'admin.php';
