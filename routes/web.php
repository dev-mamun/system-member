<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
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

Route::get('/{username}', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register'])->name('register');
Route::get('greetings/congratulations', [RegistrationController::class, 'congratulations'])->name('congratulations');
