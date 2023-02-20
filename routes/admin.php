<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\Auth\LoginController;
    use App\Http\Controllers\Admin\Auth\RegisterController;
    use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
    use App\Http\Controllers\Admin\Auth\ResetPasswordController;
    use App\Http\Controllers\Admin\Customer\CustomerController;
    use App\Http\Controllers\Admin\ProfileController;
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\OrderController;
    use App\Http\Controllers\Admin\ProductController;
    use App\Http\Controllers\Admin\ContentController;
    use App\Http\Controllers\Admin\TransactionController;

    Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function() {
        Route::middleware('guest:admin')->namespace('Auth')->group(function() {
            //Login Routes
            Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
            Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

            Route::get('/register', [RegisterController::class, 'register'])->name('register');
            Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
        });

        Route::middleware('auth:admin')->group(function () {
            Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            
            Route::get('/add_user', [DashboardController::class, 'addUserForm'])->name('add_user');
            Route::post('/user_store', [DashboardController::class, 'addUser'])->name('user_store');
            Route::get('/user_edit/{user_id}', [DashboardController::class, 'editUserForm'])->name('user_edit');
            Route::post('/update_user', [DashboardController::class, 'editUser'])->name('update_user');

            Route::get('/user_delete/{id}', [DashboardController::class, 'deleteUser'])->name('user_delete');
          });
    })
?>
