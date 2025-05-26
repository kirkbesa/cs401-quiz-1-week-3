<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    protected $game_list;

    public function __construct()
    {
        $this->game_list = require __DIR__ . '/../../../database/datasource.php';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Step 3. Your code here
        return view('games.index', ['games' => $this->game_list]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Step 4.
        $game = array_filter($this->game_list, function ($game) use ($id) {
            return $game['id'] == $id;
        });

        $game = array_values($game); // reindex the array

        if (empty($game)) {
            abort(404, 'Game not found.');
        }

        return view('games.show', ['game' => $game[0]]);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Old Code (Returns deleted game)
        // $results = array_filter($this->game_list, function ($game) use ($id) {
        //     return $game['id'] == $id;
        // });

        // Simulate deletion (return remaining games after deletion)
        // Step 7
        $results = array_filter($this->game_list, function ($game) use ($id) {
            return $game['id'] != $id;
        });
        return response()->json([
            'message' => 'Record Successfull Deleted.',
            'content' => $results
        ], 200);
    }
}
