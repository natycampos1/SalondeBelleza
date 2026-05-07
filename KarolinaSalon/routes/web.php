<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// ✅ Solo una ruta '/'
Route::get('/', [UsuarioController::class, 'index']);

Route::get('users/{create}', function () {
    return "Pagina de creación de usuarios";
});

Route::get('users/{nombre}/{nacionalidad}', function ($nombre, $nacionalidad) {
    return "Bienvenido usuario: $nombre, De la Nacionalidad: $nacionalidad";
});