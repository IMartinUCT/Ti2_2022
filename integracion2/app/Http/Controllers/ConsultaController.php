<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function Prueba(){
        $test = DB::table('INFORMATION_SCHEMA.TABLES')
        ->select('TABLE_NAME')
        ->get();
        return view("a")->with('tabla',$test);
    }
}
