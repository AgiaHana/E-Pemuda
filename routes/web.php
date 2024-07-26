<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\NotulenController;
use App\Http\Controllers\NotulensiController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/notulen', function () {
    return view('notulen.index');
})->name('notulen')->middleware('auth');

Route::get('/editnotulen', function () {
    return view('notulen.edit');
});
Route::get('/tambahnotulen', function () {
    return view('notulen.create');
});
Route::get('/viewnorulen', function () {
    return view('notulen.view')->name('notulen.view');
});
// Route::post('notulen', [NotulensiController::class, 'store'])->name('notulen.store');
// Route::delete('notulen/{id}', [NotulensiController::class, 'destroy'])->name('notulen.destroy');
// Route::put('notulen/{id}', [NotulensiController::class, 'update'])->name('notulen.update');
// Route::get('notulen/{id}/edit', [NotulensiController::class, 'edit'])->name('notulen.edit');

// Route::get('notulen', [NotulenController::class, 'index'])->name('notulen.index')->middleware('auth');
// Route::get('notulen/create', [NotulenController::class, 'create'])->name('notulen.create');
// Route::post('notulen', [NotulenController::class, 'store'])->name('notulen.store');
// Route::get('notulen/{id}/edit', [NotulenController::class, 'edit'])->name('notulen.edit');
// Route::put('notulen/{id}', [NotulenController::class, 'update'])->name('notulen.update');
// Route::delete('notulen/{id}', [NotulenController::class, 'destroy'])->name('notulen.destroy');
// Route::get('notulen/view', [NotulenController::class, 'view'])->name('notulen.view');

// Route::get('notulen/{id}/show', [NotulenController::class, 'show'])->name('notulen.show');

// Route::middleware('auth')->group(function () {
//     Route::get('/notulen', [NotulenController::class, 'index'])->name('notulen.index');
// });
Route::middleware('auth')->group(function () {
    Route::get('/notulen', function () {
        return view('notulen.index');
    })->name('notulen.index');
});
    Route::get('/notulen/create', [NotulenController::class, 'create'])->name('notulen.create');
    Route::post('/notulen', [NotulenController::class, 'store'])->name('notulen.store');
    Route::get('/notulen/{id}/edit', [NotulenController::class, 'edit'])->name('notulen.edit');
    Route::put('/notulen/{id}', [NotulenController::class, 'update'])->name('notulen.update');
    Route::delete('/notulen/{id}', [NotulenController::class, 'destroy'])->name('notulen.destroy');
    Route::get('/notulen/{id}/view', [NotulenController::class, 'show'])->name('notulen.view');
    Route::get('/download-notulensi/{id}', [NotulenController::class, 'downloadPDF'])->name('download.notulensi');
    // Route::get('notulen/{id}', [NotulenController::class, 'pdf'])->name('notulen.show');
    Route::get('notulen/{id}/download', [NotulenController::class, 'downloadPdf'])->name('notulen.downloadPdf');

Route::get('anggota', [AnggotaController::class, 'index'])->name('data.index');
Route::get('anggota/create', [AnggotaController::class, 'create'])->name('data.create'); 
Route::post('anggota/tambah', [AnggotaController::class, 'store'])->name('data.store');
Route::get('anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('data.edit');
Route::put('anggota/{id}', [AnggotaController::class, 'update'])->name('data.update');
Route::delete('anggota/{id}', [AnggotaController::class, 'destroy'])->name('data.destroy');
Route::get('anggota/{id}/view', [AnggotaController::class, 'show'])->name('data.show');

Route::get('/login', [AuthenController::class, 'showLoginForm'])->name('login');
Route::post('/login/proses', [AuthenController::class, 'login'])->name('loginproses');
Route::get('/register', [AuthenController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthenController::class, 'register'])->name('registerproses');
Route::post('/logout', [AuthenController::class, 'logout'])->name('logout');

// Route::get('/share/{id}', [NotulenController::class, 'show'])->name('notulen.show');
// Route::get('/share/{id}/whatsapp', [NotulenController::class, 'shareToWhatsApp'])->name('share.whatsapp');

Route::get('wa/{id}', [NotulenController::class, 'show'])->name('notulen.show');
Route::get('wa/{id}/send', [NotulenController::class, 'sendViaWhatsapp'])->name('notulen.sendViaWhatsapp');