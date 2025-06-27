<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;

Route::get('/init', [MainController::class, 'initMethod'])->name('init');
Route::get('/view', [MainController::class, 'viewPage'])->name('view');

// Route para Controller Single Action
Route::get('/single', SingleActionController::class)->name('single');