<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\CartController;


// UserAccountController View Routes
Route::get('/registrationForm', [UserAccountController::class, 'registerView'])->name('register.userSide');

Route::get('/loginForm', [UserAccountController::class, 'loginView'])->name('login.userSide');

Route::get('/dashboard/{userID}', [UserAccountController::class, 'dashboard'])->name('dashboard.userSide');

// Database Routes
Route::post('/register', [UserAccountController::class, 'register'])->name('register.db');

Route::post('/login', [UserAccountController::class, 'login'])->name('login.db');


// CartController View Routes
Route::get('/cart', [CartController::class, 'cartView'])->name('cart.userSide');