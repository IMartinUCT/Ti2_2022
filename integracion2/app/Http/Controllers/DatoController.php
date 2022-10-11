<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use DB;

class DatoController extends Controller
{
    public function index() {
        $db_name = env("DB_DATABASE");
        $tables = DB::select("SELECT table_name FROM information_schema.tables WHERE table_type != 'view' AND table_catalog = '{$db_name}' AND table_name NOT IN ('failed_jobs','migrations','password_resets','personal_access_tokens')");
        $table_names = [];
        foreach($tables as $table){
            $table_names[] = $table->table_name;
        }
        #falta hacer que tome el valor del nombre de la tabla dinámicamente
        #conectar de alguna forma con el value del 'option value' en el index
        $xd = $table_names[2];//0 = departamentos / 1 = gastos / 2 = users
        $columnas = DB::getSchemaBuilder()->getColumnListing($xd);
        $filas = DB::table($xd)->get();
        return view('index',compact('columnas','filas','table_names'));
    }
}