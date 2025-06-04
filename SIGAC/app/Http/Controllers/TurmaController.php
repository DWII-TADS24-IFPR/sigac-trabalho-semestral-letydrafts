<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Turma;
use App\Models\Curso;

class TurmaController extends Controller
{
    
    public function index()
    {
        $turmas = Turma::with(['curso'])->get();
        return view('turmas.index', compact('turmas'));
    }

    
    public function create()
    {
        $cursos = Curso::all();
        return view('turmas.create', compact('cursos'));
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
          'curso_id'=>'required|exists:cursos,id',
            'ano'=>'required|numeric|digits:4'
        ]);

        Turma::create($request->all());

        return redirect()->route('turmas.index')
                            ->with('sucess', 'Turma criada no sistema.');
    }

    
    public function show(string $id)
    {
         $turma = Turma::with(['curso'])->find($id);
        return view('turmas.show', compact('turma'));
    }

    
    public function edit(string $id)
    {
        $turma = Turma::find($id);
        $cursos = Curso::all();
        return view('turmas.edit', compact('turma', 'cursos'));
    }

   
    public function update(Request $request, string $id)
    {
        $turma = Turma::find($id);

        $validated = $request->validate([
          'curso_id'=>'required|exists:cursos,id',
            'ano'=>'required|numeric|digits:4'
        ]);

        $turma = Turma::find($id);

        return redirect()->route('turmas.index')
                        ->with('success', 'Turma atualizada');
    }

    
    public function destroy(string $id)
    {
        $turma = Turma::find($id);

        if(isset($turma)){
            $turma->delete();

            return redirect()->route('turmas.index')
                    ->with('sucess', 'Turma excluida do sistema');
    }
        return '<h1>Não foi possível excluir essa turma do sistema</h1>';
    }
}
