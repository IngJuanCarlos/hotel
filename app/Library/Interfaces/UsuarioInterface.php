<?php
/**
 * Created by PhpStorm.
 * User: Juan Carlos
 * Date: 11/12/2015
 * Time: 03:08 PM
 */

namespace Library\Interfaces;


use Illuminate\Http\Request;

interface UsuarioInterface
{
    public function validar($request);
}