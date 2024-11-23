<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordRecoveryController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Root route
Route::get('/', [HomeController::class, 'root'])->name('root');

// Authentication routes
Auth::routes();

// Profile update routes
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

// Language switch route
Route::get('/switch-language/{lang}', [LanguageController::class, 'switchLanguage'])->name('switch.language');

// Catch-all route (placed last)
Route::get('{any}', [HomeController::class, 'index'])->name('index')->where('any', '.*');



Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//Login
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginPage'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post');

//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Sign up
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');
Route::post('/password-recovery', [PasswordRecoveryController::class, 'sendResetLink'])->name('password.recovery');

//teacher division
Route::get('listuser', function() {
    // Fetch all users from the database
    $Users = DB::table('users')->get();

    // Return the view and pass the users data
    return view('listuser', ['users' => $Users]);
});

