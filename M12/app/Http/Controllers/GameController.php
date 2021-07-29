<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function __construct() {

        $this->authorizeResource(Game::class, 'game'); 

    }
   
    public function index() {

        $games = Game::all();


        return view('game.index', compact('games'));
    }

    public function create ($id="1") {

        $teams = Team::all();

        return view('game.create', compact('teams', 'id'));
    }

    public function show(Game $game) {

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

    
    public function edit(Game $game){

    
        $teams =Team::all();

        return view('game.edit', compact('game', 'teams'));
    }

    public function update(Request $request, Game $game){
        
        $request->validate([
            'date_game' => 'required|date|after:tomorrow',
            'description' => 'required',
            'team1_id'=>'required|different:team2_id',
            'team2_id'=>'required|different:team1_id'
        ]);

       $game->update($request->all());
       
      return back()->with('status','Game Updated!');
    }

    public function destroy(Game $game){
      
        

        return redirect()->route('games.index')->with('status','Team Deleted');
    }


}
