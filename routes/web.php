<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});
/* CITA */
Route::get('/cita/mostrar',[CitaController::class, 'mostrar'])->middleware("auth");

Route::get('/cita/formulario',[CitaController::class, 'formulario'])->middleware("auth");

/* doctor */

Route::get('/doctor/mostrar',[DoctorController::class, 'mostrar'])->middleware("auth");

Route::get('/doctor/formulario',function () {
    return view('doctor.formularioc');
});

/* especialidad */

Route::get('/especialidad/mostrar',[EspecialidadController::class, 'mostrar'])->middleware("auth");
Route::get('/especialidad/formulario',function () {
    return view('especialidad.formularioc');
});

/* horario */


Route::get('/horario/mostrar',[HorarioController::class, 'mostrar'])->middleware("auth");
Route::get('/horario/formulario',function () {
    return view('horario.formularioc');
});


/* paciente */
Route::get('/paciente/mostrar',[PacienteController::class, 'mostrar'])->middleware("auth");
Route::get('/paciente/formulario',function () {
    return view('paciente.formularioc');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
