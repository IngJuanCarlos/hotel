<?php

namespace Hotel\Http\Controllers;

use Illuminate\Http\Request;

use Hotel\Http\Requests;
use Hotel\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.index');
    }

    public function validar(Request $request){
        dd($request);
    }
}
