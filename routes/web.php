<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PlateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TransferController;
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
Route::get('/', [MainController::class, 'index'])->middleware('guest')->name('index');
Route::get('/home', [MainController::class, 'home'])->middleware('auth')->name('home');
Route::get('/start', [MainController::class, 'start'])->middleware('guest')->name('start');

/////////// Auth Routes
Route::get('/login', [MainController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'loginOtp'])->middleware(['guest', 'throttle:6,1'])->name('login.post');
Route::get('/verify-phone', [MainController::class, 'verifyPhone'])->middleware('guest')->name('verify.phone');
Route::post('/verify-phone', [AuthController::class, 'verifyPhonePost'])->middleware(['guest', 'throttle:6,1'])->name('verify.phone.post');
Route::get('/logout', [AuthController::class, 'logout'])->middleware(['auth'])->name('logout');

/////////// App Group Routes
Route::prefix('app')->middleware(['auth'])->group(function () {

    /////// General Routes
    Route::get('/', [MainController::class, 'app'])->name('app');

    /////// Plate Routes
    Route::get('/plate/new', [MainController::class, 'plateNew'])->name('plate.new');
    Route::get('/plate/edit/{id}', [PlateController::class, 'edit'])->name('plate.edit');
    Route::post('/plate/edit', [PlateController::class, 'editPost'])->name('plate.edit.post');
    Route::post('/plate/new', [PlateController::class, 'new']);
    Route::get('/plate/delete/{id}', [PlateController::class, 'delete'])->name('plate.delete');
    Route::get('/plate/transfer/{id}', [TransferController::class, 'transfer'])->name('plate.transfer');
    Route::get('/plate/transfer/info/{id}', [TransferController::class, 'info'])->name('plate.transfer.info');
    Route::post('/plate/transfer', [TransferController::class, 'transferPost'])->name('plate.transfer.post');
    Route::get('/plate/transfer/accept/{id}', [TransferController::class, 'accept'])->name('plate.transfer.accept');
    Route::get('/plate/transfer/deny/{id}', [TransferController::class, 'deny'])->name('plate.transfer.deny');
    Route::get('/plate/transfer/hide/{id}', [TransferController::class, 'hide'])->name('plate.transfer.hide');

    /////// Service Routes
    Route::get('/service-select/{id}', [MainController::class, 'serviceSelect'])->name('service.select');

    /////// Notifications Routes
    Route::get('/notifications', [MainController::class, 'notifications'])->name('notifications');
    Route::get('/notification/{id}', [MainController::class, 'notificationsDetails'])->name('notification.detail');

    /////// Contact Routes
    Route::get('/support', [MainController::class, 'support'])->name('support');
    Route::post('/support', [SupportController::class, 'support'])->name('support.post');

    /////// Profile Routes
    Route::get('/profile', [MainController::class, 'profile'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

});




