<?php

namespace Hotel\Http\Controllers;

use Illuminate\Http\Request;

use Hotel\Http\Requests;
use Hotel\Http\Controllers\Controller;
use Library\Interfaces\UsuarioInterface;

class LoginController extends Controller
{
    protected $usuario;

    public function __construct(UsuarioInterface $usuario)
    {
        $this->usuario = $usuario;
    }

    public function index()
    {
        return view('login.index');
    }


    public function validar(Request $request)
    {
        return $this->usuario->validar($request);
    }
}
