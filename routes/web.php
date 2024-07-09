<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ClienteController;
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

// CRUD de clientes
Route::get('cliente/listar',[ClienteController::class,'index'])->name('cliente.index');
Route::get('cliente/create',[ClienteController::class,'create'])->name('cliente.create');
Route::post('cliente/store',[ClienteController::class,'store'])->name('cliente.store');
Route::get('cliente/{cliente}',[ClienteController::class,'show'])->name('cliente.show');
Route::get('cliente/{cliente}/editar',[ClienteController::class,'edit'])->name('cliente.edit');
Route::put('cliente/{cliente}',[ClienteController::class,'update'])->name('cliente.update');

Route::delete('cliente/{cliente}',[ClienteController::class,'destroy'])->name('cliente.destroy');

// CRUD de proyectos
Route::get('proyecto/listar',[ProyectoController::class,'index'])->name('proyecto.index');
Route::get('proyecto/create',[ProyectoController::class,'create'])->name('proyecto.create');
Route::post('proyecto/store',[ProyectoController::class,'store'])->name('proyecto.store');
Route::get('proyecto/{proyecto}',[ProyectoController::class,'show'])->name('proyecto.show');
Route::get('proyecto/{proyecto}/editar',[ProyectoController::class,'edit'])->name('proyecto.edit');
Route::put('proyecto/{proyecto}',[ProyectoController::class,'update'])->name('proyecto.update');

Route::delete('proyecto/{proyecto}',[ProyectoController::class,'destroy'])->name('proyecto.destroy');
