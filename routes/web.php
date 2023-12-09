<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
//Get Routes
Route::redirect('/', '/home');
Route::get('/home', [PageController::class, 'homePage'])->name('home');
Route::get('/sign-up', [PageController::class, 'signUp'])->name('sign-up');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/course', [PageController::class, 'coursePage'])->name('course');

//Post Routes
Route::post('/login-account', [PageController::class, 'loginAccount'])->name('loginAccount');
Route::post('/add-account', [PageController::class, 'createAccount'])->name('addAccount');
