<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('agenda/create', [AgendaController::class, 'create'])->name('agenda.create');
Route::get('agenda/{agenda}', [AgendaController::class, 'show'])->where(['agenda' => '[0-9]+'])->name('agenda.show');
Route::post('agenda', [AgendaController::class, 'store'])->name('agenda.store');

Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
