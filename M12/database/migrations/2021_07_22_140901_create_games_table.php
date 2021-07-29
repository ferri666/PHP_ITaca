<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->date('date_game');
            $table->text('description')->default('No Description');
            $table->foreignId('team1_id')->constrained('teams')->onUpdate('cascade')->onDelete('cascade'); //Equipo local
            $table->foreignId('team2_id')->constrained('teams')->onUpdate('cascade')->onDelete('cascade'); //Equipo visitante
            $table->enum('status', ['Played', 'Announced', 'Cancelled'])->default('Announced');
            $table->smallInteger('team1_points')->default(0);
            $table->smallInteger('team2_points')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
