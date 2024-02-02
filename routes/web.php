<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::resource('users', UsersController::class);
Route::get('/remove-user/{user}', [UsersController::class, 'destroy'])->name('removeUser');

Route::resource('product', ProductsController::class);
Route::get('/remove-product/{product}', [ProductsController::class, 'destroy'])->name('removeProduct');

Route::resource('order', OrdersController::class);
