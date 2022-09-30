<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create(){
        return view("auth.login");
    }
    public function store(){
        if(Auth()->attempt(request(["email","password"]))==false) {
            return back()->withErrors([
                "message"=>"El correo ingresado o la contraseña son incorrecta"]);
        }
        return redirect()->to("/");
    }
    public function destroy(){
        Auth()->logout();
        return redirect()->to("/");
    }
}