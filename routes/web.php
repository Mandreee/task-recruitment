<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', [AuthController::class, 'index']);
Route::post('/authenticate', [AuthController::class, 'authentication']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/registration', [RegistrationController::class, 'index']);
Route::post('/registration/store', [RegistrationController::class, 'registration']);


Route::get('/', [IndexController::class, 'index'])->middleware('authentication');
Route::get('/detail/{id}', [IndexController::class, 'detail']);


