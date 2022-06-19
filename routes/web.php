<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [MainController::class, 'login'])->middleware('guest');
Route::get('/login', [MainController::class, 'login'])->middleware('guest');
Route::post('/login-app', [AuthController::class, 'loginOtp'])->middleware(['guest', 'throttle:6,1']);
Route::get('/verify-number', [MainController::class, 'verify'])->middleware('guest');
Route::post('/verify-number', [AuthController::class, 'verify'])->middleware(['guest', 'throttle:6,1']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware(['auth'])->name('logout');


Route::prefix('app')->middleware(['auth'])->group(function () {

    Route::get('/', [MainController::class, 'index'])->name('home');

    Route::get('/car-new', [MainController::class, 'carNew'])->name('carNew');

    Route::get('/service-list', [MainController::class, 'serviceList'])->name('serviceList');

    Route::get('/notifications', [MainController::class, 'notifications'])->name('notifications');
    Route::get('/notifications-details', [MainController::class, 'notificationsDetails'])->name('notificationsDetails');

    Route::get('/contact', [MainController::class, 'contact'])->name('contact');
    Route::get('/profile', [MainController::class, 'profile'])->name('profile');

});




