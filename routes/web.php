<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctoresController; //nombre del controlador

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/doctores', function () {
    return view('doctores');
})->middleware(['auth', 'verified'])->name('doctores');

Route::get('/registro_doctores', function () {
    return view('registro_doctores');
})->middleware(['auth', 'verified'])->name('registro_doctores');


Route::get('/pacientes', function () {
    return view('pacientes');
})->middleware(['auth', 'verified'])->name('pacientes');

Route::get('/registro_pacientes', function () {
    return view('registro_pacientes');
})->middleware(['auth', 'verified'])->name('registro_pacientes');

Route::resource('guardar_doctores', DoctoresController::class);//Mostrar vista que tenga ProductController


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
