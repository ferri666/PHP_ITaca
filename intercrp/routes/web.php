<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleatController;
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

Route::get('empleats', [EmpleatController::class,'index'])->name('index');
Route::get('empleats/create', [EmpleatController::class,'create'])->name('create');
Route::post('empleats/create', [EmpleatController::class,'store'])->name('store');
Route::get('empleats/{id}', [EmpleatController::class,'show'])->name('show');
Route::get('empleats/{id}/edit', [EmpleatController::class,'edit'])->name('edit');
Route::put('empleats/{id}/update', [EmpleatController::class,'update'])->name('update');
Route::delete('empleats/{id}/destroy', [EmpleatController::class,'destroy'])->name('destroy');
Route::post('empleats/buscar', [EmpleatController::class,'buscar'])->name('buscar');