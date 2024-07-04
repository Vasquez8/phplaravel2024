<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;

Route::group(['prefix' => 'asistencias'], function () {
    Route::get('/', [AsistenciaController::class, 'index'])->name('asistencias.index');
    Route::get('/show/{id}', [AsistenciaController::class, 'show'])->name('asistencias.show');
});