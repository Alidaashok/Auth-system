<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[UserAuthController::class,'login']);
Route::get('/registration',[UserAuthController::class,'registration']);
Route::post('/register-user',[UserAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[UserAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[UserAuthController::class,'dashboard']);
Route::get('/logout',[UserAuthController::class,'logout']);