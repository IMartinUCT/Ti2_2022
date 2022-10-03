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
        return view('index',['table_names'=>$table_names]);
    }
}