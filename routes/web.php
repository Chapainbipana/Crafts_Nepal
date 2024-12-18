<?php

use App\Http\Controllers\Product_Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('welcome',function(){
  return view('welcome');
});

Route::get('main',function(){
  return view('layouts.main');
});

Route::get('footer',function(){
    return view('include.footer');
  });
Route::resource('product',Product_Controller::class);

require __DIR__.'/auth.php';
