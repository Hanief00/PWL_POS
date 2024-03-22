<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
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
    return view('home');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/tambah', [UserController::class, 'tambah']);
Route::post('/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

// Route::get('/user/tambah', function() { 
//     return view('user_tambah');
// });

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', function () {
//     return view('welcome');
// });

// Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
// Route::put('/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
// Route::get('/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');
