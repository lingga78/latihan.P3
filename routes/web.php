<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailTransaksiController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'template.master');

Route::view('/home', 'template.master');

Route::get('login', [LoginController::class, 'view'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'proses'])->name('login.proses')->middleware('guest');
Route::get('logout', [LoginController::class, 'logout'])->name('logout.admin');

Route::get('register', [RegisterController::class, 'register'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin')->middleware('auth');
Route::get('dashboard/kasir', [DashboardController::class, 'kasir'])->name('dashboard.kasir')->middleware('auth');
Route::get('dashboard/owner', [DashboardController::class, 'owner'])->name('dashboard.owner')->middleware('auth');

Route::resource('outlet', OutletController::class);
Route::resource('paket', PaketController::class);
Route::resource('member', MemberController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('detailtransaksi', DetailTransaksiController::class);


Route::view('error/403', 'error.403')->name('error.403');

 