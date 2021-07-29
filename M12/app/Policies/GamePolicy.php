<?php

namespace App\Policies;

use App\Models\Game;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GamePolicy
{
    use HandlesAuthorization;


    public function before(User $user, $ability) {


        if ($user->hasRole('admin')) {
            return true;
        }


    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function view(User $user, Game $game)
    {
        $user_teams=$user->teams;
        
        foreach ($user_teams as $user_team) {
            if ($user_team->id==$game->team1_id || $user_team->id==$game->team2_id) return true;

        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function update(User $user, Game $game)
    {
        $user_teams=$user->teams;
        
        foreach ($user_teams as $user_team) {
            if ($user_team->id==$game->team1_id || $user_team->id==$game->team2_id) return true;

        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function delete(User $user, Game $game)
    {
        $user_teams=$user->teams;
        
        foreach ($user_teams as $user_team) {
            if ($user_team->id==$game->team1_id || $user_team->id==$game->team2_id) return true;

        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function restore(User $user, Game $game)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function forceDelete(User $user, Game $game)
    {
        //
    }
}
