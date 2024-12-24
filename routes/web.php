<?php

use App\Http\Controllers\CartController;
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
Route::get('/',function(){
  return view('welcome');
});

Route::get('main',function(){
  return view('layouts.main');
})->name('main');
// product
Route:: get('product',[Product_Controller::class,'index']);
Route:: get('product.show',[Product_Controller::class,'showform']);
Route:: post('product',[Product_Controller::class,'store'])->name('add.product.store');

//Route::resource('product',Product_Controller::class);

// product cart
Route:: post('cart', [CartController::class,'index'])->name('add.to.cart');


require __DIR__.'/auth.php';
