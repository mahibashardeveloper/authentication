<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'dashboard'] )->name('auth.dashboard');

Route::get('auth/login', [FrontController::class, 'login'] )->name('auth.login');

Route::get('auth/register', [FrontController::class, 'register'] )->name('auth.register');

Route::get('auth/forget', [FrontController::class, 'forget'] )->name('auth.forget');

Route::get('auth/reset', [FrontController::class, 'reset'] )->name('auth.reset');
