<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GameController extends Controller
{
    public function index() {

        $games = Game::all();


        return view('game.index', compact('games'));
    }

    public function create() {

        $teams = Team::all();

        return view('game.create', compact('teams'));
    }

    public function show($id) {

        $game = Game::findOrFail($id);
        $team1 = Team::findOrFail($game->team1_id);
        $team2 = Team::findOrFail($game->team2_id);


        return view('game.show', compact('game', 'team1', 'team2'));
    }

    public function store(Request $request){

        $request->validate ([
            'date_game'=>'required|date|after:tomorrow',
            'description'=>'required',
            'team1_id'=>'required|different:team2_id',
            'team2_id'=>'required|different:team1_id'
        ]);


        Game::create($request->all());
       
      return back()->with('status','New Game Scheduled!');
    }

    
    public function edit($id){

        $game = Game::findOrFail($id);
        $teams =Team::all();

        return view('game.edit', compact('game', 'teams'));
    }

    public function update(Request $request, $id){
        
        $request->validate([
            'date_game' => 'required|date|after:tomorrow',
            'description' => 'required',
            'team1_id'=>'required|different:team2_id',
            'team2_id'=>'required|different:team1_id'
        ]);

       Game::findOrFail($id)->update($request->all());
       
      return back()->with('status','Game Updated!');
    }

    public function destroy($id){
        Game::findOrFail($id)->delete();

        return redirect()->route('gameIndex')->with('status','Team Deleted');
    }


}
