<?php

use App\Http\Controllers\PassportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\ShopController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('shops', ShopController::class)->only('store', 'index');

Route::resource('shops.pictures', PictureController::class)->only('store', 'index');

Route:: delete ('shops/{shop}/pictures', [PictureController::class, 'destroy'])->name('shop.pictures.destroy');

Route:: post ('register', [PassportController::class, 'register'])->name('register');