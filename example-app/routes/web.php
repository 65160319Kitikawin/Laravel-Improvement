<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use Illuminate\Http\Request;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', [AccountController::class, 'login_view'])->name('login');
Route::get('/register', [AccountController::class, 'register_view']);
Route::post('/login', [AccountController::class, 'login_process']);
Route::post('/register', [AccountController::class, 'register_process']);
Route::get('/logout', [AccountController::class, 'logout_process']);
