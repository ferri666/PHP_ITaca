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

Route::get('/', HomeController::class)->name('home');;
Route::get('login', [AuthController::class, 'loginForm'])->name('loginForm');
Route::get('register', [AuthController::class, 'registerForm'])->name('registerForm');
Route::get('fpsswd', [AuthController::class, 'fpsswdForm'])->name('fpsswdForm');
Route::get('logout', [AuthController::class, 'logout']);

Route::get('catalog', [CatalogController::class, 'catalog']);
Route::get('catalog/show/{id}', [CatalogController::class, 'show'])->name('show');
Route::get('catalog/create', [CatalogController::class, 'createForm'])->name('createForm');
Route::get('catalog/edit/{id}', [CatalogController::class, 'editForm'])->name('editForm');

Route::post('catalog/create', [CatalogController::class, 'create'])->name('create');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('catalog/edit/{id}', [CatalogController::class, 'edit'])->name('edit');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('fpsswd', [AuthController::class, 'fpsswd'])->name('fpsswd');