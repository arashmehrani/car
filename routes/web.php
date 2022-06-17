<?php

use App\Http\Controllers\MainController;
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
Route::get('/', [MainController::class, 'login']);
Route::get('/home', [MainController::class, 'index']);
Route::get('/verify-number', [MainController::class, 'verify']);
Route::get('/car-new', [MainController::class, 'carNew']);
Route::get('/service-list', [MainController::class, 'serviceList']);

