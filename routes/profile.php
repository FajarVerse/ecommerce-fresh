<?php


use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth' , 'user')->group(function () {
  // Route::get('/profil', function () {
  //   return view('profile');
  // })->name('profil');

  Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
  Route::patch('/profile', [UserProfileController::class, 'update'])->name('profile.update');
});
