<?php

// Direccion de la pagina web
Route::get('/', 'InicioController@index');

// Direccion del sistema
Route::get('/habitacion/mostrar', 'HabitacionController@mostrar');
Route::get('/habitacion/rentar', 'HabitacionController@rentar');
Route::get('/habitacion/agregar', 'HabitacionController@agregar');
Route::get('/habitacion/listar', 'HabitacionController@listar');
