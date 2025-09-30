<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RotaController;

Route::get('/', [RotaController::class, 'index'])->name('index');
Route::get('/create', [RotaController::class, 'create'])->name('create');
Route::post('/store', [RotaController::class, 'store'])->name('store');
Route::get('/edit{id}', [RotaController::class, 'edit'])->name('edit');
Route::put('/update{id}', [RotaController::class, 'update'])->name('update');
Route::get('/show{id}', [RotaController::class, 'show'])->name('show');
Route::delete('/destroy{id}', [RotaController::class, 'destroy'])->name('destroy');
