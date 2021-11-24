<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTopico extends Model
{
        protected $fillable = [
                        'id_disciplina',
                        'assunto',
                        'video_aula',
                        'pdf',
                        'resumo',
                        'lei_seca',
                        'aula',
                        'qtd_revisao',
                        'qtd_exercicio',
                       ]; 

    //nome da tabela
    protected $table = 'topico';
        public function disciplinas(){

          return $this->belongsTo(ModelDisciplina::class, 'id');

    }
}
