<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaDisciplina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Disciplinas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_plano');
            $table->string('disciplina');
            $table->string('qt_aula');
            $table->string('prof');
            $table->string('questoes');
            $table->string('dificuldade');
            $table->string('carga_horaria');
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
        Schema::dropIfExists('Disciplinas');
    }
}
