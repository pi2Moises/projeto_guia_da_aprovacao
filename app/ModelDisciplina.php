<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDisciplina extends Model
{
     protected $fillable = [
        'id_plano',
        'disciplina',        
        'id_disciplina',
        'qt_aula',
        'carga_horaria',
        'prof',
        'questoes',
        'dificuldade'
    ]; 

    //nome da tabela
    protected $table = 'disciplinas';
    
    public function topicos(){

          return $this->hasMany(ModelTopico::class, 'id_disciplina');

    }
}
