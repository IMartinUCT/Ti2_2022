<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;
use App\Models\Departamentos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GastoController extends Controller
{
    public function index() {

        if (Auth::user()) {
            $user = Auth::user();
            $id_depa = $user->id_departamento;
            $columnas_gastos = DB::getSchemaBuilder()->getColumnListing('gastos');
            $filas_gastos = DB::table('gastos')->where('id_departamento',$id_depa)->get();
            $query1 = DB::table('gastos')->select('id','Vehiculos','Combustible')->where('id_departamento',$id_depa)->get();
            $query2 = DB::table('gastos')->select('id','Sueldo','Capital')->where('id_departamento',$id_depa)->get();
            return view('documentos',compact('columnas_gastos', 'filas_gastos', 'query1', 'query2'));
            
        }else{
            return view('index');
        }
    }

    function list(){

        return Gasto::all();
    }
}
