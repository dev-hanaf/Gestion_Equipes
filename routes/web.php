<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\IncreassePointsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/equipe', [EquipeController::class, 'index'])->name('equipe.index');
Route::get('/equipe/create', [EquipeController::class, 'create'])->name('equipe.create');
Route::post('/equipe', [EquipeController::class, 'store'])->name('equipe.store');
Route::get('/equipe/{equipe}', [EquipeController::class, 'show'])->name('equipe.show');
Route::get('/equipe/{equipe}/edit', [EquipeController::class, 'edit'])->name('equipe.edit');
Route::put('/equipe/{equipe}', [EquipeController::class, 'update'])->name('equipe.update');
Route::delete('/equipe/{equipe}', [EquipeController::class, 'destroy'])->name('equipe.destroy');




Route::get('/points', [IncreassePointsController::class, 'index'])->name('points.index');
Route::post('/points/validate', [IncreassePointsController::class, 'validatePoints'])->name('points.validate');
