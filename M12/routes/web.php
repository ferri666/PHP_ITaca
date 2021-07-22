<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware'=>'auth'], function() {

    Route::resource('teams', TeamController::class);

    //Equipos
   /* Route::get('teams', [TeamController::class, 'index'])->name('teamIndex');
    Route::get('teams/{team}', [TeamController::class, 'show'])->name('teamShow');
    Route::get('teams/create/view/',[TeamController::class, 'create'])->name('team.create');
    Route::post('teams/create', [TeamController::class, 'store'])->name('teamStore');
    Route::get('teams/{team}/edit', [TeamController::class, 'edit'])->name('teamEdit');
    Route::put('teams/{team}/edit', [TeamController::class, 'update'])->name('teamUpdate');
    Route::delete('teams/{team}/destroy', [TeamController::class,'destroy'])->name('teamDestroy');*/
    

    Route::get('games', [GameController::class, 'index'])->name('gameIndex');
    Route::get('games/{game}', [GameController::class, 'show'])->name('gameShow');
    Route::get('games/create/view/{id?}', [GameController::class, 'create'])->name('gameCreate');
    Route::post('games/create', [GameController::class, 'store'])->name('gameStore');
    Route::get('games/{game}/edit', [GameController::class, 'edit'])->name('gameEdit');
    Route::put('games/{game}/edit', [GameController::class, 'update'])->name('gameUpdate');
    Route::delete('games/{game}/destroy', [GameController::class,'destroy'])->name('gameDestroy');

});



