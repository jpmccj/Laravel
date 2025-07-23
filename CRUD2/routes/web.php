<?php

use App\Http\Controllers\EnferController;
use App\Http\Controllers\MedController;
use App\Http\Controllers\PacienteController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//criar medico
Route::get('criar-med', [MedController::class, 'create'])->name('med.create');
Route::post('ler-med', [MedController::class, 'ler'])->name('med.ler');

//lista de medicos cadastrados
Route::get('listar-med', [MedController::class, 'listar'])->name('med.listar');

// Exibir usuarios unicos por id
Route::get('medico/{id}', [MedController::class, 'mostrar'])->name('med.mostrar');

// Editar 
Route::get('/medicos/{id}/editar', [MedController::class, 'editar'])->name('med.editar');
Route::put('/medicos/{id}', [MedController::class, 'atualizar'])->name('med.atualizar');

// Deletar
Route::delete('medico/{id}', [MedController::class, 'deletar'])->name('med.deletar');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//pacientes
Route::get('criar-paci', [PacienteController::class, 'create'])->name('paci.create');
Route::post('criar-paci', [PacienteController::class, 'ler'])->name('paci.ler');

Route::get('listar-paci', [PacienteController::class, 'listar'])->name('paci.listar');
Route::get('paciente/{id}', [PacienteController::class, 'mostrar'])->name('paci.mostrar');

Route::delete('deletar-paci/{id}', [PacienteController::class, 'deletar'])->name('paci.deletar');


Route::get('/pacientes/{id}/editar', [PacienteController::class, 'editar'])->name('paci.editar');
Route::put('/pacientes/{id}', [PacienteController::class, 'atualizar'])->name('paci.atualizar');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//enfermeiros
Route::get('criar-enfermeiro', [EnferController::class, 'create'])->name('enfermeiro.create');
Route::post('ler-enfermeiro', [EnferController::class, 'ler'])->name('enfermeiro.ler');

Route::get('listar-enfermeiro',[EnferController::class, 'listar'])->name('enfermeiro.listar');
Route::get('enfermeiro/{id}', [EnferController::class, 'mostrar'])->name('enfermeiro.mostrar');

Route::delete('deletar-enfermeiro/{id}', [EnferController::class, 'deletar'])->name('enfermeiro.deletar');

Route::get('/enfermeiro/{id}/editar', [EnferController::class, 'editar'])->name('enfermeiro.editar');
Route::put('/enfermeiro/{id}', [EnferController::class, 'atualizar'])->name('enfermeiro.atualizar');






