<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;


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

# Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

# Mobil
Route::get('/data-mobil', [MobilController::class, 'index']);

# User
Route::get('/data-user', [UserController::class, 'index']);

# Transaksi
Route::get('/data-transaksi', [TransaksiController::class, 'index']);
