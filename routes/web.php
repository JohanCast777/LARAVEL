<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [GameController::class,'index']);
Route::get('games/create', [GameController::class,'create'])->name('create');
Route::get('games/{name_game}/{categoria?}',[GameController::class, 'help']);
Route::get('/test', [GameController::class,'index2'])->name('listgames');
Route::post('games/storevideogame', [GameController::class,'storevideogame'])->name('createvideogame');
Route::get('view/{game_id}', [GameController::class,'view'])->name('viewgame');
Route::post('games/updatevideogames', [GameController::class,'updatevideogame'])->name('updatevideogame');
Route::get('delete/{game_id}', [GameController::class,'delete'])->name('deletegame');
Route::resource('categories', CategoryController::class);