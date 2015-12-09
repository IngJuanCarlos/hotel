<?php

namespace Hotel\Http\Controllers;

use Illuminate\Http\Request;

use Hotel\Http\Requests;
use Hotel\Http\Controllers\Controller;

class HabitacionController extends Controller
{

    public function mostrar()
    {
        return view('habitacion/mostrar');
    }

    public function rentar()
    {
        return view('habitacion/rentar');
    }

    public function agregar(){
        return view('habitacion/agregar');
    }

    public function listar(){
        return view('habitacion/listar');
    }
}
