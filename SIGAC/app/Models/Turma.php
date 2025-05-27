<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';
    protected $fillable = ['curso_id','ano'];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    public function alunos(){
        return $this->hasMany(Aluno::class);
    }
}
