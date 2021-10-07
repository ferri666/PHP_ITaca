<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'dau1',
        'dau2',
        'player_id',
        'win'
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
    
    public function score() {
        $player = Player::findOrFail($this->player_id);
        $player->total_games++;
        if ($this->win) $player->total_wins++;
        else $player->total_loses++;
        $player->save();
    }
}
