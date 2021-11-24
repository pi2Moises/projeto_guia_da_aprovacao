<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMetaHoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_metas_hora', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_plano',10);
            $table->string('disciplina',500);
            $table->string('user',50);
            $table->float('hora_estudada');
            $table->float('hora_planejada');
            $table->string('data',50);
            $table->string('dia_semana',50);
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
        Schema::dropIfExists('tb_metas_hora');
    }
}
