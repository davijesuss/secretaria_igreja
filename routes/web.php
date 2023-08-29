<?php

use App\Http\Controllers\CooperadoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\igrejaController;
use App\Http\Controllers\PresbiteroController;
use App\Http\Controllers\SetoresController;

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
Route::get('/', [igrejaController::class, 'index'])->name('igreja.home');
Route::post('/igreja', [igrejaController::class, 'store'])->name('igreja.home-store');


Route::get('/presbiteros', [PresbiteroController::class, 'index'])->name('igreja.presbiteros');
Route::get('/presbiteros/{id}/edit', [PresbiteroController::class, 'edit'])->name('igreja.presbiteros.edit');
Route::put('/presbiteros/{id}', [PresbiteroController::class, 'update'])->name('igreja.presbiteros.update');
Route::delete('/presbiteros/{id}', [PresbiteroController::class, 'destroy'])->name('igreja.presbiteros.destroy');



Route::get('/cooperadores', [CooperadoresController::class, 'index'])->name('igreja.cooperadoes');
Route::get('/cooperadores/{id}/edit', [CooperadoresController::class, 'edit'])->name('igreja.cooperadoes.edit');
Route::put('/cooperadores/{id}', [CooperadoresController::class, 'update'])->name('igreja.cooperadoes.update');
Route::delete('/cooperadores/{id}', [CooperadoresController::class, 'destroy'])->name('igreja.cooperadoes.destroy');



Route::get('/setores', [SetoresController::class, 'index'])->name('igreja.setores');
Route::post('/', [SetoresController::class, 'store'])->name('igreja.setores-store');
Route::get('/setores/{id}/edit', [SetoresController::class, 'edit'])->name('igreja.setores-edit');
Route::put('/setores/{id}', [SetoresController::class, 'update'])->name('igreja.setores-update');
Route::delete('/setores/{id}', [SetoresController::class, 'destroy'])->name('igreja.setores-destroy');

//Route::get('/', function () {
   // return view('welcome');
//});
