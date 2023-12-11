<?php

use App\Http\Controllers\CursoController;
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

// Feito no curso!
Route::get('/index-curso', [CursoController::class, 'index'])->name('curso.index');
Route::get('/show-curso/{curso}', [CursoController::class, 'show'])->name('curso.show');
Route::get('/create-curso', [CursoController::class, 'create'])->name('curso.create');
Route::post('/store-curso', [CursoController::class, 'store'])->name('curso.store');
Route::get('/edit-curso/{curso}', [CursoController::class, 'edit'])->name('curso.edit');
Route::put('/update-curso/{curso}', [CursoController::class, 'update'])->name('curso.update');
Route::delete('/destroy-curso/{curso}', [CursoController::class, 'destroy'])->name('curso.destroy');