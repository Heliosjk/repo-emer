<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\UserController;

Route::get('/usuarios/registrar', [UserController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');


// Ruta principal
Route::get('/', function () {
    return redirect()->route('trabajos.index'); // Redirige a /trabajos
});

// Grupo de rutas para trabajos
Route::prefix('trabajos')->name('trabajos.')->group(function () {
    Route::get('/', fn() => view('trabajos.index'))->name('index');
    Route::get('/create', fn() => view('trabajos.create'))->name('create');

    // Ruta para mostrar un trabajo específico
    Route::get('/{id}', fn($id) => view('trabajos.show'))->name('show');
});

Route::prefix('miembros')->name('miembros.')->group(function () {
    Route::get('/', fn() => view('miembros.index'))->name('index');
    Route::get('/{id}/subir', fn($id) => view('miembros.subir'))->name('subir');
    Route::get('/{id}/editar', fn($id) => view('miembros.editar'))->name('editar');
});

Route::prefix('docente')->name('docente.')->group(function () {
    Route::get('/', fn() => view('docente.index'))->name('index');
    Route::get('/{id}', fn($id) => view('docente.show'))->name('show');
});
