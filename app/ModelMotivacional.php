<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMotivacional extends Model
{
    protected $fillable = [
				    	'frase',
				        'autor',
				       ]; 

    //nome da tabela
    protected $table = 'motivacional';
}
