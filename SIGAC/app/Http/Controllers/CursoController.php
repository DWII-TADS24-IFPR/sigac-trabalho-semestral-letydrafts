<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;
use App\Models\Nivel;

class CursoController extends Controller
{
    
    public function index()
    {
       $cursos = Curso::with(['nivel'])->get();
       return view('cursos.index', compact('cursos'));
    }

    
    public function create()
    {
        $niveis = Nivel::all();
        return view('cursos.create', compact('niveis'));
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'=>'required|string|min:3',
            'sigla'=>'required|string',
            'total_horas'=>'required|numeric',
            'nivel_id'=>'required|exists:niveis,id'
        ]);

        Nivel::create($request->all());

        return redirect()->route('cursos.index')
                            ->with('sucess', 'Curso criado no sistema.');
    }

    
    public function show(string $id)
    {
        $curso = Curso::with(['nivel'])->find($id);
        return view('cursos.show', compact('cursos'));
    }

    
    public function edit(string $id)
    {
        $curso = Curso::find($id);
        $niveis = Nivel::all();
        return view('cursos.edit', compact('curso'));
    }

    
    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);

        $validated = $request->validate([
            'nome'=>'required|string|min:3',
            'sigla'=>'required|string',
            'total_horas'=>'required|numeric',
            'nivel_id'=>'required|exists:niveis,id'
        ]);

        $curso->update($validated);

        return redirect()->route('cursos.index')
                        ->with('success', 'Curso atualizado com sucesso.');
    }

    
    public function destroy(string $id)
    {
        $curso = Curso::find($id);

        if(isset($curso)){
            $curso->delete();

            return redirect()->route('cursos.index')
                    ->with('sucess', 'Curso excluido do sistema');
        }

        return '<h1>Não foi possível excluir esse curso do sistema</h1>';
        
    }
}
