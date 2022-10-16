<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class RegisterController extends Controller
{   
    //select option con value del id_departamento en el formulario register
    public function index(){

        $departamentos = DB::select("SELECT id, tipo_departamento FROM departamentos");        
        return view('auth.register',compact('departamentos'));
    }
    public function create(){
        
        return view("auth.register");
    }
    public function store(){

        $user = User::create(request(['name', 'email', 'password','id_departamento']));

        auth()->login($user);
        return redirect()->to("/");
    }
}
