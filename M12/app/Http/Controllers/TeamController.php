<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{

    public function __construct() {

        $this->authorizeResource(Team::class, 'team'); 

    }
    

    
    public function index() {

        $teams = Team::all();

        return view('team.index', compact('teams'));
    }

    public function create(){
        return view('team.create');
    }

    public function show(Team $team){

        return view('team.show', compact('team'));
    }

    public function edit(Team $team){

    return view('team.edit', compact('team'));
    }

    public function store(Request $request){

        $request->validate ([
            'name'=>'required',
            'race'=>'required'
        ]);

        $request['user_id']=Auth::user()->id;

        Team::create($request->all());


       
      return back()->with('status','New Team Added!');
    }

    public function update(Request $request, Team $team){
        
        $request->validate([
            'name' => 'required',
            'race' => 'required'
        ]);

        

       $team->update($request->all());
       
      return back()->with('status','Team Updated!');
    }

    public function destroy(Team $team) {
     // if(auth()->user()->can('delete', $team)) {

        $team->delete();

      //}

        return redirect()->route('teams.index')->with('status','Team Deleted');
    }

}
