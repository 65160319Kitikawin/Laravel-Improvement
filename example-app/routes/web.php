<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

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

Route::get("/login",[AuthController::class,"login_view"]) -> name('login');
Route::get("/register",[AuthController::class,"register_view"]);
Route::get('/logout', [AuthController::class, 'logout_process']);
Route::post("/login",[AuthController::class,"login_process"]);
Route::post("/register",[AuthController::class,"register_process"]);

Route::resource('customers', CrudController::class) -> middleware('auth');
