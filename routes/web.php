<?php

use illuminate\Support\Facades\Route;

// Route::get('/hello', function () {
//     return 'hello world';
// });

Route::get('/user/{id}', function ($id) {
    return 'id user : ' . $id;
})->where('id', '[0-9]+');


use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');
    
