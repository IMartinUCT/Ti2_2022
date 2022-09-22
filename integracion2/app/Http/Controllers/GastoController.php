<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;

class GastoController extends Controller
{
    public function getGastos() {
        $gastos = Gasto::all();
        return view('index',['gastos'=>$gastos]);
    }

    function list(){

        return Gasto::all();
    }
}
