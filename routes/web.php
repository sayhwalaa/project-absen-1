<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});


// Route Pengguna
Route::get('/home', [HomeController::class, 'index'])->name('home.index')->middleware('auth');
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index')->middleware('auth');
Route::get('/pengguna/tambah', [PenggunaController::class,'tambahPengguna'])->name('pengguna.tambahPengguna')->middleware('auth');
Route::post('/pengguna', [PenggunaController::class,'simpanPengguna'])->name('pengguna.simpanPengguna');
Route::get('/pengguna/ubah/{id}', [PenggunaController::class, 'ubahPengguna'])->name('pengguna.ubahPengguna')->middleware('auth');
Route::post('/pengguna/update/{id}', [PenggunaController::class, 'updatePengguna'])->name('pengguna.updatePengguna');
Route::get('/pengguna/delete/{id}', [PenggunaController::class, 'deletePengguna'])->name('pengguna.deletePengguna');

// Route Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index')->middleware('auth');
Route::get('/pegawai/tambah', [PegawaiController::class,'tambahPegawai'])->name('pegawai.tambahPegawai')->middleware('auth');
Route::post('/pegawai', [PegawaiController::class,'simpanPegawai'])->name('pegawai.simpanPegawai');
Route::get('/pegawai/ubah/{id}', [PegawaiController::class, 'ubahPegawai'])->name('pegawai.ubahPegawai')->middleware('auth');
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'updatePegawai'])->name('pegawai.updatePegawai');
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);

// AUTH
Route::get('/login', [AuthController::class, 'index'])->name('index')->middleware('auth');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
