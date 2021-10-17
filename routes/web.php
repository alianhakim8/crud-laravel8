<?php

use App\Http\Controllers\GajiPegawaiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PegawaiController;

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

// Route CRUD
// Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);

Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);


// Route Data Gaji Pegawai
Route::get('/pegawai/gaji', [GajiPegawaiController::class, 'index']);
Route::get('/pegawai/gaji/tambah', [GajiPegawaiController::class . 'tambah']);

Route::post('/pegawai/gaji/store', [GajiPegawaiController::class, 'store']);
Route::get('/pegawai/gaji/edit/{id}', [GajiPegawaiController::class, 'edit']);
Route::post('/pegawai/gaji/update', [GajiPegawaiController::class, 'update']);

Route::get('pegawai/hapus/{id}', [GajiPegawaiController::class, 'hapus']);
