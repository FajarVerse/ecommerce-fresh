<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Session\Middleware\AuthenticateSession;
use App\Http\Controllers\ConfirmablePasswordController;
use App\Http\Controllers\AuthenticatedSessionController;

Route::middleware('guest')->group(function () {
        
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('/register', function() {
        return view('Register');
    })->name('register');

    Route::post('/register', [RegisterUserController::class, 'store'])->name('register.post');

});

Route::middleware('auth')->group(function () {
        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');
        
        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store'])
        ->middleware('throttle:6,1');

        Route::post('Logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
    })
?>