<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\User\PenyewaanController;
use App\Http\Controllers\User\DetailProductController;
use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\User\CheckoutController;

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


/////////////////// ADMIN ///////////////////////

# Auth
Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// middleware group
Route::middleware(['IsAdmin'])->group(function () {
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

<<<<<<< HEAD
    # User
    Route::get('/data-user', [UserController::class, 'index']);
    Route::post('/data-user', [UserController::class, 'store']);
    Route::put('/data-user/{id}', [UserController::class, 'update']);
    Route::delete('/data-user/{id}', [UserController::class, 'destroy']);

=======
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
>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc

    # Transaksi
    Route::get('/data-transaksi', [TransaksiController::class, 'index']);

    # Ulasan
    Route::get('/data-ulasan', [UlasanController::class, 'index']);
});


/////////////////// USER ///////////////////////
# Auth
Route::get('/user/login', [UserAuthController::class, 'index']);
Route::post('/user/login', [UserAuthController::class, 'login']);
Route::post('/user/register', [UserAuthController::class, 'register']);
Route::get('/user/logout', [UserAuthController::class, 'logout']);

Route::post('/user/update-profil', [UserAuthController::class, 'updateprofil']);
Route::get('/user/profil', [UserAuthController::class, 'profil']);

# Landing
Route::get('/', [LandingController::class, 'index']);

# Penyeawaan
Route::get('/user/penyewaan', [PenyewaanController::class, 'index']);

# Cart
Route::get('/user/cart', [CartController::class, 'index']);
Route::delete('/user/cart/{id}', [CartController::class, 'destroy']);
Route::post('/user/checkout', [CartController::class, 'checkout']);

# Checkout
Route::get('/user/checkout/{id}', [CheckoutController::class, 'index']);

# Detail Product
Route::get('/user/detail-product/{id}', [DetailProductController::class, 'index']);
Route::post('/user/detail-product/{id}', [DetailProductController::class, 'cekketersediaan']);
Route::post('/user/booking', [DetailProductController::class, 'booking']);
