<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelQuadroHorario extends Model
{
    protected $fillable = [
			    	'disciplina',
			        'ciclo',
			        'dia',
			        'tempo',
			        'id_plano',
			        'user',
			       ]; 

    //nome da tabela
    protected $table = 'quadro_horario';

}
