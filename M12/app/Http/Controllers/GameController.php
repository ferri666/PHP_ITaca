<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GameController extends Controller
{
    public function index() {

        $teams = Team::all();

        return view('game.index', compact('teams'));
    }

    public function create() {

        $teams = Team::all();

        return view('game.create', compact('teams'));
    }

    public function store(Request $request){

        $request->validate ([
            'date_game'=>'required',
            'description'=>'required',
            'team1_id'=>'required',
            'team2_id'=>'required|different:team1_id'
        ]);


        Game::create($request->all());
       
      return back()->with('status','New Game Scheduled!');
    }

    
    public function edit($id){

        $game = Game::findOrFail($id);

        return view('game.edit', compact('game'));
    }


}
