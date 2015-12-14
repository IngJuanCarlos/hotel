<?php
/**
 * Created by PhpStorm.
 * User: Juan Carlos
 * Date: 11/12/2015
 * Time: 03:11 PM
 */

namespace Library\Repository;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Library\Interfaces\UsuarioInterface;

class UsuarioEloquent implements UsuarioInterface
{
    protected $usuario;

    public function __construct(Model $usuario)
    {
        $this->usuario = $usuario;
    }

    public function validar($request)
    {
        $usuario = $request->usuario;
        $password = $request->password;

        if($request->remember == 'on')
        {
            $recordar = 'true';
        }else{
            $recordar = 'false';
        }

        if(Auth::attempt(["usuario"=>$usuario, "password"=>$password],$recordar)){
            return redirect()->intended('/habitacion/mostrar');
        }else{
            return redirect('/login');
        }
    }
}