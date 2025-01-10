<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChemicalController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chemicals/{chemical}', [ChemicalController::class, 'show'])->name('chemicals.detalles');
Route::get('/', [HomeController::class, 'index']);
