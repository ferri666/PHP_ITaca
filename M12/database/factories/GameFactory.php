<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'date_game'=>'2021-06-02',
                'description'=>'Game',
                'team1_id'=>'1',
                'team2_id'=>'2',
                'status'=>'played',
                'team1_points'=>rand(0,200),
                'team2_points'=>rand(0,200),
        ];
    }
}
