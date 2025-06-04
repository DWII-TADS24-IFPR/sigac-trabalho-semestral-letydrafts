<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Curso;


class CategoriaController extends Controller
{
    
    public function index()
    {
        $categorias = Categoria::with(['curso'])->get();
        return view('categorias.index', compact('categorias'));
    }

   
    public function create()
    {
        $cursos = Curso::all();
        return view('categorias.create', compact('cursos'));
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'=>'required|string|min:3',
            'maximo_horas'=>'required|numeric',
            'curso_id'=>'required|exists:cursos,id']);

            Categoria::create($request->all());

            return redirect()->route('categorias.index')->with('sucess', 'Categoria criada com sucesso.');
    }

    
    public function show(string $id)
    {
        $categoria = Categoria::with(['curso'])->find($id);
        return view('categorias.show', compact('categoria'));
    }

    
    public function edit(string $id)
    {
        $categoria = Categoria::find($id);
        $cursos = Curso::all();

        return view('categorias.edit', compact('categoria', 'cursos'));
    }

    public function update(Request $request, string $id)
    {
        $categoria = Categoria::find($id);

        $validated = $request->validate([
            'nome'=>'required|string|min:3',
            'maximo_horas'=>'required|numeric',
            'curso_id'=>'required|exists:cursos,id']);

            $categoria->update($validated);

            return redirect()->route('categorias.index')
                        ->with('sucess', 'Categoria atualizada com sucesso');

    }

    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);

        if(isset($categoria)){
            $categoria->delete();

            return redirect()->route('categorias.index')
                        ->with('sucess', 'Categoria excluida do sistema');
        }

        return '<h1>Não foi possível excluir esse registro do sistema</h1>';
    }
}
