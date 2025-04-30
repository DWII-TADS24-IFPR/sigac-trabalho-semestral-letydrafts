<?php

namespace App\Http\Controllers;
use App\Models\Pessoa;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::all();
        return view('alunos.index')->with('alunos', $alunos);
    }
}
