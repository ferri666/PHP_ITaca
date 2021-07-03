<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//use App\Models\Team;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\Game::create( ['date_game'=>'2021-08-02',
        'description'=>'Game 1',
        'team1_id'=>'1',
        'team2_id'=>'2',
        'status'=>'announced',]);

        \App\Models\Game::create( ['date_game'=>'2021-08-09',
        'description'=>'Game 2',
        'team1_id'=>'3',
        'team2_id'=>'4',
        'status'=>'announced']);

        \App\Models\Game::create( ['date_game'=>'2021-08-16',
        'description'=>'Game 3',
        'team1_id'=>'1',
        'team2_id'=>'4',
        'status'=>'announced',]);

        \App\Models\Game::create( ['date_game'=>'2021-08-23',
        'description'=>'Game 4',
        'team1_id'=>'3',
        'team2_id'=>'2',
        'status'=>'announced',]);

    }
}
