<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TelefonoController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', HomeController::class);

Route::resource('personas', PersonaController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('mascotas', MascotaController::class);
Route::resource('telefonos', TelefonoController::class);
