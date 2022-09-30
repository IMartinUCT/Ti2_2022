<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view("auth.register");
    }
    public function store(){

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect()->to("/");
    }
}
