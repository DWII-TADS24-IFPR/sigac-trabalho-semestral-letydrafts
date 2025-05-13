<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Declaracao;
use App\Models\Aluno;
use App\Models\Comprovante;

class DeclaracaoController extends Controller
{
    
    public function index()
    {
        $declarações = Declaracao::with(['aluno', 'comprovante'])->get();
        return view('declaracoes.index', compact('declaracoes');
    }


    public function create()
    {
        $alunos = Aluno::all();
        $comprovantes = Comprovante::all();
        return view('declaracoes.create', compact('alunos', 'comprovantes'));
    
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
        'hash'=>'request|string',
        'data'=>'request|string',
        'aluno_id'=>'request|exists:alunos,id',
        'comprovante_id'=>'request|exists:comprovantes,id']);

        Declaracao::create($request->all());

        return redirect()->route('declaracoes.index')
                        ->with('sucess', 'Declaração criada');
                                        
        ])
    }

   
    public function show(string $id)
    {
        $declaracao = Declaracao::with(['aluno', 'comprovante'])->find($id);
        return view('declaracao.show', compact('declaracao'));
    }

    
    public function edit(string $id)
    {
        $declaracao = Declaracao::find($id);
        $alunos = Aluno::all();
        $comprovantes = Comprovante::all();
        return view('declaracoes.edit', compact('declaracao'));
    }

   
    public function update(Request $request, string $id)
    {
        $declaracao = Declaracao::find($id);

        $validated = $request->validate([
        'hash'=>'request|string',
        'data'=>'request|string',
        'aluno_id'=>'request|exists:alunos,id',
        'comprovante_id'=>'request|exists:comprovantes,id']);

        $declaracao->update($validated);

        return redirect()->route('declaracoes.index')
                        ->with('sucess', 'Declaração atualizada');
        ]);
    }

    
    public function destroy(string $id)
    {
        $declaracao = Declaracao::find($id);

        if(isset($declaracao)){
            $declaracao->delete();
    
             return redirect()->route('declaracoes.index')
                        ->with('sucess', 'Declaração excluida');
        }
        return '<h1>Não foi possível excluir esse registro do sistema</h1>';
    }
}
