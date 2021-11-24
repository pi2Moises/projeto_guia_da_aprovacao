<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaQuadrohorario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadro_horario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_plano',10);
            $table->string('disciplina',500);
            $table->string('ciclo',10);
            $table->string('dia',50);
            $table->string('tempo',10);
            $table->string('user',50);
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
        Schema::dropIfExists('quadro_horario');
    }
}
