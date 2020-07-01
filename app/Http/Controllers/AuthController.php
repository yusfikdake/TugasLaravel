<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function ShowRegister(){
        return view('pages.register');
    }

    public function PostRegister(Request $request){
        $nama = $request['nama'];
        return "nama";
    }

    public function ShowWelcome(){
        return view('pages.welcome');
    }
}
