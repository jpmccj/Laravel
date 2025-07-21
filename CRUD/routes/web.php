<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/index-med', [UserController::class, 'index'])->name('med.index');

//metodo para criar/cadastrar um medico
Route::get('/create-med', [UserController::class, 'create'])->name('med.create'); //rota para criar um medico/ o nome deve ser o mesmo do arquivo blade que vai ser criado

Route::post('/store-med', [UserController::class, 'store'])->name('med.store'); // rota para mandar os aquivos do formulario para o metodo store do UserControllern



Route::get('/edit-med/{user}', [UserController::class, 'edit'])->name('med.edit');



Route::put('/edit-med/{user}', [UserController::class, 'update'])->name('med.update');

Route::get('/show-med/{user}', [UserController::class, 'show'])->name('med.show');


Route::delete('/delete-med/{user}', [UserController::class, 'destroy'])->name('med.destroy');



