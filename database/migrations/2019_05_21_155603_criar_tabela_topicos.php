<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTopicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_disciplina',20)->usigned();
            $table->foreign('id_disciplina')->references('id')->on('disciplinas')->onDelete('cascade');
            $table->string('assunto',500);
            $table->string('video_aula',4);
            $table->string('pdf',4);
            $table->string('resumo',4);
            $table->string('lei_seca',4);
            $table->string('qtd_revisao',4);
            $table->string('qtd_exercicio',4);
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
        Schema::dropIfExists('topico');
    }
}
