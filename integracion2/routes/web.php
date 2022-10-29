<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
Use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [RegisterController::class, 'create'])-> name('register.index');

Route::post('/register', [RegisterController::class, 'store'])-> name('register.store');

Route::get('/login', [SessionsController::class, 'create'])-> name('login.index');

Route::post('/login', [SessionsController::class, 'store'])-> name('login.store');

Route::get('/desconectarse', [SessionsController::class, 'destroy'])-> name('login.destroy');


Route::get('/documentos', function () {
    return view('documentos');
});
Route::get('/history', function () {
    return view('historial');
});
Route::get("/gastos", function () { 
    return view('gastos');
});
Route::get('/documentos', 'App\Http\Controllers\GastoController@index', 'App\Http\Controllers\DynamicQuery');
Route::get('/', 'App\Http\Controllers\DatoController@index');
Route::get('/register', 'App\Http\Controllers\RegisterController@index');
