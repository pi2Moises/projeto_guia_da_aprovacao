<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHorasEstudo extends Model
{
     //campos do formulário
    protected $fillable = [
    	'disciplina',
        'hora_estudada',
        'hora_planejada',
    	'updated_at',
    	'created_at',
    	'user'

    ]; 

    //nome da tabela
    protected $table = 'hora_estudo_disp';
}
