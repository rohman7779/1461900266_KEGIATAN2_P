<?php

use App\Http\Controllers\BukuController0266;
use App\Http\Controllers\BukuJoinController0266;
use App\Http\Controllers\BukuJoinWhereController0266;
use App\Http\Controllers\BukuWhereController0266;
use App\Http\Controllers\MahasiswaController0266;
use Illuminate\Support\Facades\Route;

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

Route::resource('mahasiswa0266', MahasiswaController0266::class);

Route::resource('buku0266', BukuController0266::class);

Route::resource('bukuwhere0266', BukuWhereController0266::class);

Route::resource('joinbuku0266', BukuJoinController0266::class);

Route::resource('joinbukuwhere0266', BukuJoinWhereController0266::class);