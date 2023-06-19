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
Route::get('/igreja', [igrejaController::class, 'index'])->name('igreja.home');
Route::get('/presbiteros', [PresbiteroController::class, 'index'])->name('igreja.presbiteros');
Route::get('/cooperadores', [CooperadoresController::class, 'index'])->name('igreja.cooperadoes');
Route::get('/setores', [SetoresController::class, 'index'])->name('igreja.setores');

//Route::get('/', function () {
   // return view('welcome');
//});
