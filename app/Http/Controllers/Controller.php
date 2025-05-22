<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index() {
        $games = Game::all();
        return view('games.index', ['games', $game_list]);
    }

    public function show($id) {
        $game = Game::find($id);
        return view('games.show', ['game', $game]);
    }

    public function destroy($id) {
        // $game = Game::delete($id);
        return view('games.destroy', ['game', $game]);
    }
}
