<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/init', [MainController::class, 'initMethod'])->name('init');
Route::get('/view', [MainController::class, 'viewPage'])->name('view');

// Route para Controller Single Action | Tipo Invokable
Route::get('/single', SingleActionController::class)->name('single');

// Route para Controller User | Tipo Resource
// Route::resource('users', UserController::class);

Route::resources([
    'clients' => ClientController::class,
    'products' => ProductController::class,
    'users' => UserController::class
]);
