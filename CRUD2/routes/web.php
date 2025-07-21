<?php

use App\Http\Controllers\MedController;
use App\Http\Controllers\PaciController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//criar medico
Route::get('criar-med', [MedController::class, 'create'])->name('med.create');
Route::post('ler-med', [MedController::class, 'ler'])->name('med.ler');


//pacientes
Route::get('criar-paci', [PaciController::class, 'create'])->name('paci.create');
Route::post('ler-paci', [PaciController::class, 'ler'])->name('paci.ler');

