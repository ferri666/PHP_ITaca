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
            $table->unsignedBigInteger('team1_id');
            $table->foreign('team1_id')->references('id')->on('teams')->onUpdate('cascade');
            $table->unsignedBigInteger('team2_id');
            $table->foreign('team2_id')->references('id')->on('teams')->onUpdate('cascade');
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
