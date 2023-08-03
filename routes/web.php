<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ServiceController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Auth::routes();

Route::get('exportExcel', [BarangController::class, 'exportExcel'])->name('barangs.exportExcel');

Route::resource('barang', BarangController::class);
// Route::put('editbarang/{barang}',[BarangController::class, 'update'])->name('updatebarang');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

