<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', function () {
    return view('home');
})->middleware('auth');
Route::get('/daftar', [AdminController::class, 'daftar']);
Route::post('/pendaftaran', [AdminController::class, 'pendaftaran']);
Route::get('/anggota', [AdminController::class, 'anggota'])->name('anggota')->middleware('admin');
Route::get('/tambah', [AdminController::class, 'tambah'])->middleware('admin');
Route::get('/anggota/detail/{id}', [AdminController::class, 'detail'])->middleware('admin');
Route::get('/anggota/edit/{id}', [AdminController::class, 'edit'])->middleware('admin');
Route::post('/anggota/update/{id}', [AdminController::class, 'update'])->middleware('admin');
Route::delete('/anggota/delete/{id}', [AdminController::class, 'delete'])->middleware('admin');

Route::post('tambah-anggota', [AdminController::class, 'tambahAnggota'])->middleware('admin');