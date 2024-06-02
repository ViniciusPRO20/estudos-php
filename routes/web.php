<?php

use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;

Route::prefix('autores')->group(function () {
    Route::get('/', [AutorController::class, 'index'])->name('autores-index');
    Route::get('/create', [AutorController::class, 'create'])->name('autores-create');
    Route::post('/', [AutorController::class, 'store'])->name('autores-store');
});