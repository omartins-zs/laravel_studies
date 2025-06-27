<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// URL USADA: http://127.0.0.1:8000/teste/abc%20%20123Gabriel
Route::get('/teste/{value}', [MainController::class, 'teste']);