<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;
use App\Models\Departamentos;
use Illuminate\Support\Facades\Auth;
use DB;

class GastoController extends Controller
{
    public function index() {

        if (Auth::user()) {
            $user = Auth::user();
            $id_depa = $user->id_departamento;
            $gastos = DB::Select("SELECT * FROM gastos WHERE id_departamento = '{$id_depa}'");

            return view('documentos',compact('gastos'));
            
        }else{
            return view('index');
        }
    }

    function list(){

        return Gasto::all();
    }
}
