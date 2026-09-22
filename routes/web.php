<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PosController;

Route::get('/user/{id}', function ($id) {
    return 'id user : ' . $id;
})->where('id', '[0-9]+');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/about', function () {
    return '
        <h1>Profil Toko POS</h1>
        <p><strong>Nama Usaha:</strong> POS Sentosa</p>
        <p><strong>Deskripsi:</strong> Aplikasi kasir terintegrasi untuk manajemen inventaris dan transaksi penjualan harian.</p>
        <p><strong>Alamat:</strong> Jl. Raya Industri No. 12, Karawang</p>
    ';
});

Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// 4.4 Rute Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');
});

// 4.4 Rute Admin & Kasir
Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos', [PosController::class, 'store'])->name('pos.store');
});

use App\Http\Controllers\UserController; 

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('/users', UserController::class);
    
});

Route::get('/index', function () {
    $posts = [
        (object)['title' => 'belajar laravel', 'content' => true],
        (object)['title' => 'belajar vue', 'content' => true],
        (object)['title' => 'belajar react', 'content' => true],
    ];
    return view('posts.index', compact('posts'));
});

Route::get('/pos/history', function () {
    return 'Halaman Riwayat Transaksi Kasir';
})->name('pos.history');
