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


    public function configure()
    {
        return $this->afterMaking(function (Game $game) {
            if($game->dau1+$game->dau2>=7){
                $game->win=true;
            } else {
                $game->win=false;
            }
        })->afterCreating(function (Game $game) {
            if($game->dau1+$game->dau2>=7){
                $game->win=true;
            } else {
                $game->win=false;
            }
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dau1' => rand(1,6),
            'dau2' => rand(1,6)
        ];
    }
}
