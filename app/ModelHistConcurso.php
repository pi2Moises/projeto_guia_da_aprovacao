<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHistConcurso extends Model
{
    //campos do formulário
    protected $fillable = [
    	'concurso',
        'nota_corte',
        'situacao',
    	'nota_min',
    	'minha_nota',
    	'dt_prova',
    	'observacao',
        'user',
    	'updated_at',
    	'created_at',
    	'user'

    ]; 

    //nome da tabela
    protected $table = 'model_hist_concursos';
}
