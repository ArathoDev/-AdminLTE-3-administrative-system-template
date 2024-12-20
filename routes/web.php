<?php

use App\Http\Controllers\GYMCategoriaController;
use App\Http\Controllers\GYMClienteController;
use App\Http\Controllers\GYMInscripcionController;
use App\Http\Controllers\GYMPromocionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MetodoController;
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


Route::get('/', [HomeController::class, 'index'])->name('dashboard.home.index');

Route::get('finanzas/metodos', [MetodoController::class, 'index'])->name('finanzas.metodo.index');

Route::get('gimnasio/categorias', [GYMCategoriaController::class, 'index'])->name('gimnasio.categoria.index');
Route::get('gimnasio/promociones', [GYMPromocionController::class, 'index'])->name('gimnasio.promocion.index');
Route::get('gimnasio/clientes', [GYMClienteController::class, 'index'])->name('gimnasio.cliente.index');