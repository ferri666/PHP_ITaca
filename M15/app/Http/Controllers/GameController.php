<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Player;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $player=Player::find($id);
        $games = $player->games;
        return response()->json($games, 200);
    }

    public function all()
    {
        $games = Game::all();
        return response()->json(compact('games'), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dau1' => 'required|integer|between:1,6',
            'dau2' => 'required|integer|between:1,6',
            'win'  => 'required|boolean',
            'player_id' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'error' => $validator->errors()
            ], 422);
        }
        
        $game = Game::create($request->post());

        $game->score;
        
        return response()->json(compact('game'), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $games = $player->games;
        $games->map(function($item){
            $item->delete();
        });
        $player->total_games=0;
        $player->total_wins=0;
        $player->total_loses=0;
        $player->save();


        return response()->json([
            'mensaje' => 'Partidas destruidas, hora de volver a llenarlas'
        ]);
    }
}
