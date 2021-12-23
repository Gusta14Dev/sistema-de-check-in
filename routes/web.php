<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/aulas', [RoomController::class, 'index'])->middleware(['auth'])->name('rooms');
Route::get('/adicionar-aula', [RoomController::class, 'create'])->middleware(['auth'])->name('create.room');
Route::post('/adicionar-aula', [RoomController::class, 'store'])->middleware(['auth'])->name('store.room');
Route::get('/editar-aula/$id', [RoomController::class, 'edit'])->middleware(['auth'])->name('edit.room');
Route::post('/editar-aula/$id', [RoomController::class, 'update'])->middleware(['auth'])->name('update.room');
Route::post('/deletar-aula/$id', [RoomController::class, 'delete'])->middleware(['auth'])->name('delete.room');

Route::get('/alunos', [UserController::class, 'index'])->middleware(['auth'])->name('students');

require __DIR__.'/auth.php';
