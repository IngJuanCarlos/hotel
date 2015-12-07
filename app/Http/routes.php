<?php

// Direccion de la pagina web
Route::get('/', 'InicioController@index');

// Direccion del sistema
Route::get('/sistema', 'SistemaController@index');
