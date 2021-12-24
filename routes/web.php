<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresenceController;
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
Route::get('/aula/{id}', [RoomController::class, 'show'])->middleware(['auth'])->name('room.show');
Route::get('/minhas-aulas', [RoomController::class, 'showRoomCheckIn'])->middleware(['auth'])->name('rooms.checkin');
Route::post('/confirmar/{id}', [PresenceController::class, 'checkIn'])->middleware(['auth'])->name('checkIn');
Route::post('/cancelar/{id}', [PresenceController::class, 'cancelCheckIn'])->middleware(['auth'])->name('checkIn.cancel');
Route::get('/aulas-da-semana', [RoomController::class, 'showRoomWeek'])->middleware(['auth'])->name('rooms.week');
Route::get('/adicionar-aula', [RoomController::class, 'create'])->middleware(['auth'])->name('create.room');
Route::post('/salvar-aula', [RoomController::class, 'store'])->middleware(['auth'])->name('store.room');
Route::get('/editar-aula/{id}', [RoomController::class, 'edit'])->middleware(['auth'])->name('edit.room');
Route::post('/editar-aula', [RoomController::class, 'update'])->middleware(['auth'])->name('update.room');
Route::post('/deletar-aula/{id}', [RoomController::class, 'delete'])->middleware(['auth'])->name('delete.room');

Route::get('/alunos', [UserController::class, 'index'])->middleware(['auth'])->name('students');

require __DIR__.'/auth.php';
