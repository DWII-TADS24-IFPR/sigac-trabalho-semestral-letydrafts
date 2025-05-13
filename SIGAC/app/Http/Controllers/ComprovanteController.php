<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comprovante;
use App\Models\Categoria;
use App\Models\Aluno;

class ComprovanteController extends Controller
{
    
    public function index()
    {
        $comprovantes = Comprovante::with(['categoria', 'aluno'])->get();
        return view('comprovantes.index', compact('comprovantes'));
    }

    
    public function create()
    {
        $categorias = Categoria::all();
        $alunos = Aluno::all();
        return view('comprovantes.create', compact('categorias', 'alunos'));
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'horas'=>'required|numeric',
            'atividade'=>'required|string',
            'categoria_id'=>'required|exists:categorias,id',
            'aluno_id'=>'required|exists:alunos,id'
        ]);

        Comprovante::create($request->all());

        return redirect()->route('comprovantes.index')
                            ->with('sucess', 'Comprovante criado no sistema.');
    }

    
    public function show(string $id)
    {
        $comprovante = Comprovante::with(['categoria', 'aluno'])->find($id);
        return view('comprovantes.show', compact('comprovante'));
    }

   
    public function edit(string $id)
    {
        $comprovante = Comprovante::find($id);
        $categorias = Categoria::all();
        $alunos = Aluno::all();

        return view('comprovantes.edit', compact('comprovante'));

    }

    
    public function update(Request $request, string $id)
    {
        $comprovante = Comprovante::find($id);

        $validated = $request->validate([
            'horas'=>'required|numeric',
            'atividade'=>'required|string',
            'categoria_id'=>'required|exists:categorias,id',
            'aluno_id'=>'required|exists:alunos,id'
        ]);

        $comprovante->update($validated);

        return redirect()->route('comprovantes.index')
                        ->with('success', 'Comprovante atualizado com sucesso.');
  
    }

    
    public function destroy(string $id)
    {
        $comprovante = Comprovante::find($id);

        if(isset($comprovante)){
            $comprovante->delete();

            return redirect()->route('comprovantes.index')
            ->with('sucess', 'Comprovante excluido do sistema');  
        }

        return '<h1>Não foi possível excluir esse comprovante do sistema</h1>';
    }
}
