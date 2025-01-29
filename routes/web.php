<?php

use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

// Explicação da Rota
// Assinatura base de uma rota
// Route::verb('uri', callback); - o callback é a ação que vai ser executada quando a rota for acionada

// Rota com função anônima
Route::get('/rota', function () {
    return "<h1> Olá laravel </h1>";
});

Route::get('/user', function () {
    return "<h1> Aqui esta o Usuario </h1>";
});

Route::get('/injection', function (Request $request) {
    var_dump($request);
});

Route::match(['get', 'post'], '/match', function (Request $request) {
    return "<h1> Aceita GET E POST </h1>";
});

Route::any('/any', function (Request $request) {
    return "<h1> Aceita qualquer HTTP verb </h1>";
});

Route::get('/index', [MainController::class, 'index']);

Route::get('/about', [MainController::class, 'about']);

Route::redirect('/saltar', '/index');

Route::permanentRedirect('/saltar2', '/index');

Route::view('/view', 'home');

Route::view('/view2', 'home', ['myName' => 'Gabriel Martins']);

// ----------------------------------------------
// ROUTE PARAMETROS
// ----------------------------------------------

Route::get('/valor/{value}',[MainController::class, 'mostrarValor']);
Route::get('/valores/{value1}/{value2}',[MainController::class, 'mostrarValores']);
Route::get('/valores2/{value1}/{value2}',[MainController::class, 'mostrarValores2']);

Route::get('/opcional/{value1?}',[MainController::class, 'mostrarValorOpcional']);

Route::get('/opcional2/{value1}/{value2?}',[MainController::class, 'mostrarValorOpcional2']);

Route::get('/user/{user_id}/post/{post_id}',[MainController::class, 'mostrarPosts']);


Route::get('/param2/{nome}/{idade}', function ($nome, $idade) {
    return "<h1> Parametro: $nome - Idade: $idade </h1>";
});