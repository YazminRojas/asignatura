<?php

use Illuminate\Support\Facades\Route;

//------------------------------------------------------
use App\Http\Controllers\GradoController;
Route::resources([
    'grados' => GradoController::class,
]);

use App\Http\Controllers\AreaController;
Route::resources([
    'areas' => AreaController::class,
]);

use App\Http\Controllers\AsignaturaController;
Route::resources([
    'asignaturas' => AsignaturaController::class,
]);

use App\Http\Controllers\AlumnoController;
Route::resources([
    'alumnos' => AlumnoController::class,
]);

use App\Http\Controllers\MatriculaController;
Route::resources([
    'matriculas' => MatriculaController::class,
]);

use App\Http\Controllers\DocenteController;
Route::resources([
    'docentes' => DocenteController::class,
]);

use App\Http\Controllers\CursoController;
Route::resources([
    'cursos' => CursoController::class,
]);

//----------------------------------------------
Route::get('/', function () {
  return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 