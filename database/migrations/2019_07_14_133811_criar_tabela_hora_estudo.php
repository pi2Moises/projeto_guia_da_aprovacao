<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaHoraEstudo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hora_estudo_disp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_plano',10);
            $table->string('disciplina',500);
            $table->string('user',50);
            $table->float('hora_estudada');
            $table->float('hora_planejada');
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
        Schema::dropIfExists('hora_estudo_disp');
    }
}
