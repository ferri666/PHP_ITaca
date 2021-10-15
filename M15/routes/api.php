<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('jwt.auth')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware('jwt.auth')->group(function(){

Route::resource('players', PlayerController::class)->only('index', 'store', 'update', 'show');

Route::resource('players.games', GameController::class)->only('index', 'store');

Route::get('games/all', [GameController::class, 'all'] )->name('players.games.all');

Route::delete('players/{player}/games', [GameController::class, 'destroy'])->name('players.games.destroy');

Route::get('players/ranking/show', [PlayerController::class, 'ranking'] )->name('players.ranking');

Route::get('players/ranking/loser', [PlayerController::class, 'loser'] )->name('players.loser');

Route::get('players/ranking/winner', [PlayerController::class, 'winner'] )->name('players.winner');    


});