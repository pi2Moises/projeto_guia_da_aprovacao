<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaHistConcurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_hist_concursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('concurso',200);            
            $table->string('nota_min',50);
            $table->string('minha_nota',50);
            $table->string('nota_corte',50);
            $table->string('situacao',50);
            $table->string('dt_prova', 50);
            $table->string('observacao', 200);
            $table->string('user',200);
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
        Schema::dropIfExists('model_hist_concursos');
    }
}
