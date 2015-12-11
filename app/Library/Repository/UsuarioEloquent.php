<?php
/**
 * Created by PhpStorm.
 * User: Juan Carlos
 * Date: 11/12/2015
 * Time: 03:11 PM
 */

namespace Library\Repository;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Library\Entities\Usuario;
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
        dd($this->usuario->all());
    }
}