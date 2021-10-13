<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Player;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players=Player::all();

        return response()->json($players);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name' => 'unique:App\Models\Player,name|nullable'
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'error' => $validator->errors()
            ], 422);
        }
        
        $player = Player::create($request->post());
        
        return response()->json(compact('player'), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $player = Player::find($id);

       return response()->json($player, 200);
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
        $validator = Validator::make($request->all(), [
            'name' => 'unique:App\Models\Player,name|nullable'
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'error' => $validator->errors()
            ], 422);
        }

        $player = Player::find($id);

        $player->update($request->all());
        
        return response()->json(compact('player'), 202);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function ranking()
    {
        $scores = collect([]);
        $players=Player::all();
        foreach ($players as $player){
            $games=$player->total_games;
            if($games>0){
            $wins=$player->total_wins;
            $awr= ($wins*100)/$games;
            $scores->push([
                'id'=> $player->id,
                'awr'=> $awr,
                'name'=> $player->name
            ]);
            }
        }

        $ordenado = $scores->sortByDesc('awr');
        return response()->json($ordenado);
    }

    public function loser()
    {
        $players=Player::all();
        $awl=101;
        $id=0;

        foreach($players as $player) {
            $games=$player->total_games;
            if($games>0){
            $wins=$player->total_wins;
            $awr= (($wins*100)/$games);
            if($awr<$awl) {
                $awl=$awr;
                $id=$player->id;
            }
        }
        }

        $loser = Player::find($id);

        return response()->json(compact('loser', 'awl'));

    }

    public function winner()
    {
        $players=Player::all();
        $awp=-1;
        $id=0;

        foreach($players as $player) {
            $games=$player->total_games;
            if($games>0){
            $wins=$player->total_wins;
            $awr= (($wins*100)/$games);
            if($awr>$awp) {
                $awp=$awr;
                $id=$player->id;
            }
        }
        }

        $winner = Player::find($id);

        return response()->json(compact('winner', 'awp'));
    }

}
