<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/get-csrf-token', function () {
    return response()->json(['_token' => csrf_token()]);
});
<<<<<<< HEAD
Route::get('/', [GamesController::class, 'index'])->name('games.index');
// Step 2. make the routes for the rest of the actions
Route::get('/games/{id}', [GamesController::class, 'show'])->name('games.show');
Route::delete('/games/{id}', [GamesController::class, 'destroy'])->name('games.destroy');
=======
Route::get('/', [GamesController::class,])->name('.index');

// make the routes for the rest of the actions
Route::get('/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/games/{id}', [GamesController::class, 'show'])->name('games.show');
Route::delete('/games/{id}', [GamesController::class, 'delete'])->name('games.destroy');
>>>>>>> dd10422be3c2522e90c6bad69f42fbc363875fb3
