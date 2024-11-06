<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;

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



