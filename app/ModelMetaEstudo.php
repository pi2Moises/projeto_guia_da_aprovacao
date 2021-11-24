<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMetaEstudo extends Model
{
         //campos do formulário
    protected $fillable = [
    	// 'disciplina',
    	// 'id_plano',
        'hora_estudada',
        'hora_planejada',
    	'updated_at',
    	'created_at',
    	'user',
    	'data',
    	'dia_semana',
    	'nome_meta'

    ]; 

    //nome da tabela
    protected $table = 'tb_metas_hora';
}
