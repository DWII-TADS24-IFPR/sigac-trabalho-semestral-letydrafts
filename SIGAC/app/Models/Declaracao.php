<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Declaracao extends Model
{
    protected $table = 'declaracoes';
    protected $fillable = ['hash','data', 'aluno_id', 'comprovante_id'];

    public function comprovante(){
        return $this->belongsTo(Comprovante::class);
    }
    
        public function aluno(){
            return $this->belongsTo(Aluno::class);
    }
}
