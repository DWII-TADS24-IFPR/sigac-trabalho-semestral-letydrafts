<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Declaracaoo extends Model
{
    protected $table = 'declaracoes';
    protected $fillable = ['hash','data', 'aluno_id', 'comprovante_id'];
}
