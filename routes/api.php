<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'Login'])->name('API.USER.LOGIN');
    Route::post('register', [AuthController::class, 'Register'])->name('API.USER.REGISTER');
    Route::post('forgot', [AuthController::class, 'Forgot'])->name('API.USER.FORGOT');
    Route::post('reset', [AuthController::class, 'Reset'])->name('API.USER.RESET');
});
