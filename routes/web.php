<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ShopingController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'register']);

Route::get('/shoping', [ShopingController::class, 'products_list']);

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart', [CartController::class, 'add_cart']);

Route::get('/logout', [LoginController::class, 'logout']);