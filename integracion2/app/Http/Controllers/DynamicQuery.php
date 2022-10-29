<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;
use App\Models\Departamentos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DynamicQuery extends Controller
{
    public function index(){

        if(Auth::user()){
            $user=Auth::user();
            $Dep_id=$user->id_departamento;
            $tables=DB::select("SHOW TABLES");
            return view('QueryTest', compact('tables'));
        }

    }
    
    public function seleccion(Request $request){
        $var = $request->Check;
        $array = [];
        $count = 0;
        $con = "TABLE_NAME"; 
        for ($i = 0;$i<count($var);$i++){
            $users = DB::table('INFORMATION_SCHEMA.COLUMNS')
                ->select('COLUMN_NAME')
                ->where($con,$var[$i])
                ->get();
                
                for ($i=0;$i< count($users);$i++){
                    $arr = Arr::add($array,$count++, [$var[$i],$users[$i]->COLUMN_NAME]);
                }
            }
        return view("QueryTest")->with(compact('array','var'));
    }  
    public function tablas(){

        $tabla = DB::table('INFORMATION_SCHEMA.TABLES')
        ->select('TABLE_NAME')
        ->get();
        return view("QueryTest")->with('tabla',$tabla);
    } 


}
