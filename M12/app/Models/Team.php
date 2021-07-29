<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'race',
        'user_id'
    ];

    public function visitante() {
        
        return $this->hasMany(Game::class, 'team2_id', 'id');

    }

    public function local() {
        
        return $this->hasmany(Game::class, 'team1_id', 'id');

    }
    
    
}
