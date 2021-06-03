<?php

use App\Http\Controllers\EmpleatController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('empleats', [EmpleatController::class,'index']);
Route::post('empleats/create', [EmpleatController::class,'create']);
Route::get('empleats/{id}', [EmpleatController::class,'show']);
Route::post('empleats/{id}', [EmpleatController::class,'edit']);
Route::delete('empleats/{id}', [EmpleatController::class,'delete']);