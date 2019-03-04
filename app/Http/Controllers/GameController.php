<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function single($id,$slug)
    {
        $game = Game::findOrFail($id);
        return view('games.single',compact('game'));
    }


}
