<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnyoEscolarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anyo_escolars', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fechainicio')->nullable();
            $table->dateTime('fechafinal')->nullable();
            $table->integer('centro')->unsigned();
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
        Schema::dropIfExists('anyo_escolars');
    }
}
