<?php

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
    return view('home/home');
});

Route::get('/cadastroOrcamento', function () {
    return view('cadastroOrcamento/cadastroOrcamento');
});

Route::get('/orcamentos', function () {
    return view('orcamentos/orcamentos');
});