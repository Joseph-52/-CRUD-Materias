<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\DatosMateria;
use App\Http\Controllers\DatosMateriaController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('Datos-Materia', DatosMateriaController::class)->parameters([
    'Datos-Materia' => 'datosMateria'
]);