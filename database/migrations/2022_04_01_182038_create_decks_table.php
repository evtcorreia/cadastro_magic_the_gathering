<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decks', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('nome');
            $table->string('identidade');
            $table->bigInteger('jogador_id')->unsigned();


            $table->foreign('jogador_id')
                ->references('id')
                ->on('jogadores');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('decks');
    }
}
