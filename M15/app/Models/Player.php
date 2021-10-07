<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Game;
//use Tymon\JWTAuth\Contracts\JWTSubject;
//use Laravel\Passport\HasApiTokens;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $nullable = [
        'name'
    ];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
/*
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
*/
}
