<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;
use App\Models\Departamentos;

class GastoController extends Controller
{
    public function index() {
        $gastos = Gasto::all();
        return view('index',compact('gastos'));
    }

    function list(){

        return Gasto::all();
    }
}
