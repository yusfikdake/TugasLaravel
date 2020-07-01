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
        return view('pages.welcome',['nama' => $nama]);
    }

    public function ShowWelcome(Request $request){
        $nama = $request['nama'];
        return view('pages.welcome',['nama' => $nama]);
    }   

}
