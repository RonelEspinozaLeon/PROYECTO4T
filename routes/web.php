<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/* CITA */
Route::get('/cita/mostrar',function () {
    return view('cita.mostrarc');
});
Route::get('/cita/formulario',function () {
    return view('cita.formularioc');
});


/* CITA */