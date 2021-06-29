<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{


    public function index() {

        $teams = Team::all();

        return view('team.index', compact('teams'));
    }

    public function create(){
        dd(":)");
        return view('team.create');
    }

    public function show($id){

        $team = Team::findOrFail($id);

        return view('team.show', compact('team'));
    }

    public function edit($id){

        $team = Team::findOrFail($id);

    return view('team.edit', compact('team'));
    }

    public function store(Request $request){

        $request->validate ([
            'name'=>'required',
            'manager'=>'required',
            'race'=>'required'
        ]);


        Team::create($request->all());
       
      return back()->with('status','New Team Added!');
    }

    public function update(Request $request, $id){
        
        $request->validate([
            'name' => 'required',
            'race' => 'required',
            'manager'=>'required'
        ]);

       Team::findOrFail($id)->update($request->all());
       
      return back()->with('status','Team Updated!');
    }

    public function destroy($id){
        Team::findOrFail($id)->delete();

        return redirect()->route('teamIndex')->with('status','Team Deleted');
    }

}
