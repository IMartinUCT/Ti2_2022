<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/Gastos","App\Http\Controllers\GastosController@index"); //Mostrar todos los registros
Route::post("/Gastos","App\Http\Controllers\GastosController@store"); //crear un registro
Route::put("/Gastos{id}","App\Http\Controllers\GastosController@update");//updatear
Route::delete("/Gastos{id}","App\Http\Controllers\GastosController@destroy");