<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
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

Route::get('/', function () {
    return view('welcome');
});

    Route::get('reservas', [ReservaController::class, 'index'])->name('reservas.index');
    Route::get('reservas/{reserva}', [ReservaController::class, 'show'])->name('reservas.show');
    Route::get('reservas/create/',[ReservaController::class, 'create'])->name('reservas.create');
    Route::post('reservas/create', [ReservaController::class, 'store'])->name('reservas.store');
    Route::get('reservas/{reserva}/edit', [ReservaController::class, 'edit'])->name('reservas.edit');
    Route::put('reservas/{reserva}/edit', [ReservaController::class, 'update'])->name('reservas.update');
    Route::delete('reservas/{reserva}/destroy', [ReservaController::class,'destroy'])->name('reservas.destroy');