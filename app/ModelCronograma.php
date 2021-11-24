<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCronograma extends Model
{
       protected $fillable = [
    	'orgao',
        'dt_edital',
        'dt_prova',
    	'banca',
    	'qt_vaga',
    	'salario',
    	'tx_inscricao',
        'prazo_inscricao',
        'local_prova',
        'cargo',
        'pos_edital',
        'user',
        'imagem',
        'tx_inscricao',        
        'anotacoes',
        'created_at',
    	'updated_at',
    	'pg_inscricao'

    ]; 

    //nome da tabela
    protected $table = 'plano';
}
