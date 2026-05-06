<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{create}', function () {
    return "Pagina de creación de usuarios";
});


Route::get('users/{nombre}/{nacionalidad}', function ($nombre, $nacionalidad) {
    return "Bienvenido usuario: $nombre, De la Nacionalidad: $nacionalidad";
});