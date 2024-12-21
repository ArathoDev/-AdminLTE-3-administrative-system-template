<?php

use App\Http\Controllers\finanzas\MetodoController as FinanzasMetodoController;
use App\Http\Controllers\gimnasio\CategoriaController;
use App\Http\Controllers\gimnasio\ClienteController;
use App\Http\Controllers\gimnasio\PromocionController;
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

Route::get('finanzas/metodos', [FinanzasMetodoController::class, 'index'])->name('finanzas.metodo.index');

Route::get('gimnasio/categorias', [CategoriaController::class, 'index'])->name('gimnasio.categoria.index');
Route::get('gimnasio/promociones', [PromocionController::class, 'index'])->name('gimnasio.promocion.index');
Route::get('gimnasio/clientes', [ClienteController::class, 'index'])->name('gimnasio.cliente.index');