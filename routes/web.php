<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function () {
    return view('hola');
});

Route::get('/contacto', [ContactoController::class, 'formularioContacto'])
    ->name('contacto');

Route::post('/recibe-formulario', [ContactoController::class, 'recibeFormulario'])
    ->name('recibe-formulario');