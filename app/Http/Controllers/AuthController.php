<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        $data['title']='Trip Login Panel';
        return view('admin.login',$data);

    }
}
