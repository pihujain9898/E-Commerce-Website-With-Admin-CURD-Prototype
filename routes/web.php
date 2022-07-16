<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ShopingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\GithubSocialiteController;
use App\Http\Controllers\FacebookSocialiteController;

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

Route::get('/admin', [AdminController::class, 'adminDashboard']);

Route::get('/database', [AdminController::class, 'database']);
Route::get('/database/{table_name}', [AdminController::class, 'database']);

Route::post('/delete', [AdminController::class, 'delete']);
Route::post('/update', [AdminController::class, 'update']);
Route::post('/insert', [AdminController::class, 'insert']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

Route::get('auth/github', [GithubSocialiteController::class, 'redirectToGithub']);
Route::get('callback/github', [GithubSocialiteController::class, 'handleCallback']);

Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFacebook']);
Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);