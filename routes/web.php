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

Route::post('/doctor/guardar', [DoctorController::class, 'guardar'])->name('doctor.guardar');
Route::get('/doctor/home', function () {
    return view('doctor.homeDoctor');
});



/* especialidad */
Route::get('/especialidad/mostrar', [EspecialidadController::class, 'mostrar'])->middleware("auth");
Route::get('/especialidad/formulario', [EspecialidadController::class, 'especialidad'])->middleware("auth");
Route::post('/especialidad/guardar', [EspecialidadController::class, 'guardar'])->name('especialidad.guardar')->middleware("auth");

/* horario */
Route::get('/horario/mostrar', [HorarioController::class, 'mostrar'])->middleware("auth");
Route::get('/horario/formulario', [HorarioController::class, 'horario'])->middleware("auth");
Route::post('/horario/guardar', [HorarioController::class, 'guardar'])->name('horario.guardar')->middleware("auth");


/* paciente */
Route::get('/paciente/mostrar',[PacienteController::class, 'mostrar'])->middleware("auth");
Route::get('/paciente/formulario',function () {
    return view('paciente.formulariop');
});
Route::get('/paciente/home',function () {
    return view('paciente.homePaciente');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
