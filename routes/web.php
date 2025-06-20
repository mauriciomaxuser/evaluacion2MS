<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotoController;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/clientes/mapa', [ClienteController::class, 'mapa']);
//habilitando acceso a controlador
Route::resource('pilotos',PilotoController::class);

//Route::resource('predios',PredioController::class);