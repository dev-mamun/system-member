<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyReferenceController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FundsController;
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
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register/{username}', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register'])->name('register');
Route::get('welcome', [RegistrationController::class, 'congratulations'])->name('congratulations');
Route::get('login', [LoginController::class, 'loginPage']);
Route::get('/', [RegistrationController::class, 'version']);
Route::get('/my-reference', [MyReferenceController::class, 'index']);
Route::get('/bonus', [BonusController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/funds-history', [FundsController::class, 'index']);
Route::get('/daily-spins', [DashboardController::class, 'dailySpinPage']);
Route::get('/add-funds', [DashboardController::class, 'addFundsPage']);
Route::post('/funds/add', [DashboardController::class, 'addFundProcess']);
Route::get('/splash', [RegistrationController::class, 'splashPage']);
Route::get('/my-daily-spins', [DashboardController::class, 'myDailySpinsPage']);
Route::get('/my-funds', [DashboardController::class, 'myFundsPage']);
Route::get('/withdrawal', [DashboardController::class, 'withdrawalPage']);
Route::get('/my-bonus-items', [DashboardController::class, 'myBonusItem']);
Route::get('/my-raffle-ticket', [DashboardController::class, 'myRaffleTicket']);

Route::get('/my-profile', [DashboardController::class, 'MyProfile'])->name('my-profile');
Route::get('/my-profile-edit', [DashboardController::class, 'MyProfileEdit'])->name('my-profile-edit');

