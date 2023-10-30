<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    return view('index');
});

Route::get('/about', function () { return view('about', ['on' => 'Tentang UI']); });
Route::get('/kampus', function () { return view('kampus', ['on' => 'Kampus']); });

Route::prefix('people')->group(function () {
    Route::get('/dekan-fakultas', function () {
        return view('dekan-fakultas', ['on' => 'Dekan Fakultas']);
    });

    Route::get('/pimpinan-universitas', function () {
        return view('pimpinan-universitas', ['on' => 'Pimpinan Universitas']);
    });

    Route::get('/pusat-administrasi-universitas', function () {
        return view('pusat-administrasi', ['on' => 'Pusat Administrasi Universitas']);
    });
});

Route::get('/berita', [PostsController::class, 'index']);
Route::get('/pengumuman', function () { return view('pengumuman', ['on' => 'Mitra']); });


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');