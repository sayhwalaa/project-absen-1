<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('auth.login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
Auth::logout();
Route::get('/loginKaryawan', [LoginController::class, 'karyawan']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('Auth.login');

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');

/* MATA KULIAH */
// Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
// Route::get('/matakuliahs/create', [MataKuliahController::class, 'create'])->name('mata_kuliahs.create')->middleware('auth');
// Route::post('/matakuliahs', [MataKuliahController::class, 'store'])->name('mata_kuliahs.store');
// Route::get('/matakuliahs/{matakuliah}', [MataKuliahController::class, 'show'])->name('mata_kuliahs.show')->middleware('auth');
// Route::get('/matakuliahs/{matakuliah}/edit', [MataKuliahController::class, 'edit'])->name('mata_kuliahs.edit')->middleware('auth');
// Route::put('/matakuliahs/{matakuliah}', [MataKuliahController::class, 'update'])->name('mata_kuliahs.update');
// Route::delete('/matakuliahs/{matakuliah}', [MataKuliahController::class, 'destroy'])->name('mata_kuliahs.destroy');