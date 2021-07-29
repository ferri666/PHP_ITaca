<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_game',
        'description',
        'team1_id',
        'team2_id',
    ];



//Metodo para actualizar las puntuaciones de los equipos de un juego 

public function scores() {

    $score1=$this->team1_points;
    $score2=$this->team2_points;

    $team1 = Team::findOrFail($this->team1_id);
    $team2 = Team::findOrFail($this->team2_id);

    if($score1>$score2) {
        $team1->wins++;
        $team2->losses++;
        $team1->points+=3;

    } else if ($score1<$score2) {
        $team2->wins++;
        $team1->losses++;
        $team2->points+=3;
    } else {
        $team1->points++;
        $team2->points++;
    }

    $team1->total_points+=$score1;
    $team2->total_points+=$score2;
    $team1->save();
    $team2->save();

}


}
