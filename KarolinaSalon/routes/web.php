<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('agenda', [AgendaController::class, 'index'])->name('agenda.index');

Route::get('agenda/create', [AgendaController::class, 'create'])->name('agenda.create');

Route::get('agenda/{agenda}', [AgendaController::class, 'show'])->where(['agenda' => '[A-Za-z]+'])->name('agenda.show');
Route::post('agenda', [AgendaController::class, 'store'])->name('agenda.store');
