<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\DashboardController;
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

# Auth
Route::get('/login', [AuthController::class, 'index']);

# Profil
Route::get('/profil', [AuthController::class, 'profil']);
Route::post('/update-profil', [AuthController::class, 'updateprofil']);

# Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

# Mobil
Route::get('/data-mobil', [MobilController::class, 'index']);
Route::post('/data-mobil/add', [MobilController::class, 'store'])->name('Admin.data-mobil.add');
Route::post('/data-mobil/update/{id}', [MobilController::class, 'update'])->name('Admin.data-mobil.update');
Route::delete('/data-mobil/delete/{id}', [MobilController::class, 'destroy'])->name('Admin.data-mobil.delete');

# User
Route::get('/data-user', [UserController::class, 'index']);
Route::post('/data-users', [UserController::class, 'store'])->name('data-users.store');
Route::get('/data-users/{id}/edit', [UserController::class, 'edit'])->name('data-users.edit');
Route::put('/data-users/{id}', [UserController::class, 'update'])->name('data-users.update');
// Route::delete('/data-transaksi/{id}', [TransaksiController::class, 'destroy']);
Route::delete('/data-users/{id}', [UserController::class, 'destroy'])->name('data-users.destroy');



# Transaksi
// Route::get('/data-transaksi', [TransaksiController::class, 'index']);
Route::get('/data-transaksi', [TransaksiController::class, 'index'])->name('data-transaksi.index');
Route::put('/data-transaksi/{id}', [TransaksiController::class, 'update'])->name('data-transaksi.update');
Route::delete('/data-transaksi/{id}', [TransaksiController::class, 'destroy'])->name('data-transaksi.destroy');

# Ulasan
Route::get('/data-ulasan', [UlasanController::class, 'index']);
