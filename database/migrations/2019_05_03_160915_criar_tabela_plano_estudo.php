<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPlanoEstudo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orgao',500);
            $table->string('dt_edital',10);
            $table->string('dt_prova',10);
            $table->string('banca',500);
            $table->string('qt_vaga',5);
            $table->string('salario',15);
            $table->string('tx_inscricao',15);
            $table->string('prazo_inscricao',15);
            $table->string('local_prova',50);
            $table->string('cargo',50);
            // $table->string('pre_edital',2);
            $table->string('pos_edital',2);
            $table->string('user',5);
            // $table->string('tipo_imagem',50);
            $table->string('imagem',500);
            $table->string('anotacoes',500);
            $table->string('pg_inscricao',10);
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
        Schema::dropIfExists('plano');
    }
}
