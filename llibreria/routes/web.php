<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);
Route::get('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('catalog', [CatalogController::class, 'catalog']);
Route::get('catalog/show/{id}', [CatalogController::class, 'show']);
Route::get('catalog/create', [CatalogController::class, 'create']);
Route::put('catalog/edit/{id}', [CatalogController::class, 'edit']);
