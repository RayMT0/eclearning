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

Route::redirect('/', '/home');
Route::get('/home', [PageController::class, 'homePage'])->name('home');
Route::get('/sign-up', [PageController::class, 'signUp'])->name('sign-up');
Route::post('/add-account', [PageController::class, 'createAccount'])->name('addAccount');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login-account', [PageController::class, 'loginAccount'])->name('loginAccount');
