<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/create', [RegisterController::class, 'makeUserData']);
// Route::post('register', [RegisteredUserController::class, 'store']);

// Route::post('/create', [RegisteredUserController::class, 'store']);

// Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
// ->middleware(['signed', 'throttle:6,1'])
// ->name('verification.verify');