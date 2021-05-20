<?php

use App\Http\Controllers\BumboController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IsaacController;

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

Route::get('/', GameController::class);

Route::get('isaac', [IsaacController::class, 'basement']);

Route::get('isaac/{name}', [IsaacController::class, 'whoami']);

Route::get('bumbo', BumboController::class);