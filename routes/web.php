<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

//Get Routes
Route::redirect('/', '/home');
Route::get('/home', [PageController::class, 'homePage'])->name('home');
Route::get('/sign-up', [PageController::class, 'signUp'])->name('sign-up');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
Route::get('/course/{course?}/{mat?}', [PageController::class, 'coursePage'])->name('course');


//Post Routes
Route::post('/login-account', [PageController::class, 'loginAccount'])->name('loginAccount');
Route::post('/add-account', [PageController::class, 'createAccount'])->name('addAccount');
