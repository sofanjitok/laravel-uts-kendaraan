<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;


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


Route::get('/', [KendaraanController::class, 'list']);

Route::get('/tambah-kendaraan', function () {
    return view('tambah-kendaraan');
});
Route::post('/simpan-kendaraan', [KendaraanController::class, 'simpan']);
Route::get('/hapus/{id}', [KendaraanController::class, 'hapus']);
Route::get('/ubah/{id}', [KendaraanController::class, 'ubah']);
Route::post('/ubah', [KendaraanController::class, 'rubah']);
