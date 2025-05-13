<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;

class AlunoController extends Controller
{
   
    public function index()
    {
        $alunos = Aluno::with(['curso', 'turma'])->get();
        return view('alunos.index', compact('alunos'));
    }

    
    public function create()
    {
        $cursos = Curso::all();
        $turmas = Turma::all();
        return view('alunos.create', compact('cursos', 'turmas'));
    }

    public function store(Request $request)
    {

        $validaded = $request->validate([
            'nome'=>'required|string|min:3',
            'cpf'=>'required|numeric|digits:11|unique:alunos,cpf',
            'email'=>'required|email|unique:alunos,email',
            'senha'=>'required|string|min:8',
            'curso_id'=>'required|exists:cursos,id',
            'turma_id'=>'required|exists:turmas,id']);

            Aluno::create($request->all());

            return redirect()->route('alunos.index')
                            ->with('sucess', 'Aluno criado no sistema.');
    }

    public function show(string $id)
    {
        $aluno = Aluno::with(['curso', 'turma'])->find($id);
        return view('alunos.show', compact('aluno'));
    }

   
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        $cursos = Curso::all();
        $turmas = Turma::all();
        return view('alunos.edit', compact('aluno'));
    }

    
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);

        $validated = $request->validate([
            'nome' => 'required|string|min:3',
            'cpf' => 'required|numeric|digits:11|unique:alunos,cpf,'.$aluno->id,
            'email' => 'required|email|unique:alunos,email,'.$aluno->id,
            'curso_id' => 'required|exists:cursos,id',
            'turma_id' => 'required|exists:turmas,id'
        ]);

        $aluno->update($validated);

        return redirect()->route('alunos.index')
                        ->with('success', 'Aluno atualizado com sucesso.');
    }

    
    public function destroy(string $id)
    {
        $aluno = Aluno::find($id);

        if(isset($aluno)){
            $aluno->delete();

            return redirect()->route('alunos.index')
                    ->with('sucess', 'Aluno excluido do sistema');
        }

        return '<h1>Não foi possível excluir esse registro do sistema</h1>';
    }
}
