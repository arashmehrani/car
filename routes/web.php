<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportController;
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
/////////// General Routes
Route::get('/', [MainController::class, 'login'])->middleware('guest');
Route::get('/home', [MainController::class, 'home'])->middleware('auth');

/////////// Auth Routes
Route::get('/login', [MainController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login-app', [AuthController::class, 'loginOtp'])->middleware(['guest', 'throttle:6,1']);
Route::get('/verify-number', [MainController::class, 'verify'])->middleware('guest');
Route::post('/verify-number', [AuthController::class, 'verify'])->middleware(['guest', 'throttle:6,1']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware(['auth'])->name('logout');

/////////// App Group Routes
Route::prefix('app')->middleware(['auth'])->group(function () {

    /////// General Routes
    Route::get('/', [MainController::class, 'index'])->name('home');

    /////// Car Routes
    Route::get('/car-new', [MainController::class, 'carNew'])->name('carNew');

    /////// Service Routes
    Route::get('/service-list', [MainController::class, 'serviceList'])->name('serviceList');

    /////// Notifications Routes
    Route::get('/notifications', [MainController::class, 'notifications'])->name('notifications');
    Route::get('/notifications-details', [MainController::class, 'notificationsDetails'])->name('notificationsDetails');

    /////// Contact Routes
    Route::get('/support', [MainController::class, 'support'])->name('support');
    Route::post('/support', [SupportController::class, 'support']);

    /////// Profile Routes
    Route::get('/profile', [MainController::class, 'profile'])->name('profile');
    Route::post('/profile/edit', [ProfileController::class, 'edit']);

});




