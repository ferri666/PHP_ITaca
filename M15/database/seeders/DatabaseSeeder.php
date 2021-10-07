<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Game;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Player::factory(5)->has(Game::factory()->count(25), 'games')->create();
         $games =Game::all();
         foreach($games as $game) $game->score();
    }

}
