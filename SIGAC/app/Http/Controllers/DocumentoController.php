<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Documento;
use App\Models\Categoria;

class DocumentoController extends Controller
{
    
    public function index()
    {
       $documentos = Documento::with(['categoria'])->get();
        return view('documentos.index', compact('documentos')); 
    }

    
    public function create()
    {
        $categorias = Categoria::all();
        return view('documentos.create', compact('categorias'));
    }

    
    public function store(Request $request)
    {
       $validated = $request->validate([
        'url'=>'required|string',
        'descricao'=>'required|string',
        'horas_in'=>'required',
        'status'=>'required|string',
        'comentario'=>'required|string',
        'horas_out'=>'required',
        'categoria_id'=>'required|exists:categorias,id'
       ]);

        Documento::create($request->all());

        return redirect()->route('documentos.index')
                            ->with('sucess', 'Documento criado no sistema.');
    }

   
    public function show(string $id)
    {
        $documento = Documento::with(['categoria'])->find($id);
        return view('documentos.show', compact('documento'));
    }

   
    public function edit(string $id)
    {
        $documento = Documento::find($id);
        $categorias = Categoria::all();
        return view('documentos.edit', compact('documento', 'categorias'));
    }

   
    public function update(Request $request, string $id)
    {
        $documento = Documento::find($id);
        
        $validated = $request->validate([
        'url'=>'required|string',
        'descricao'=>'required|string',
        'horas_in'=>'required',
        'status'=>'required|string',
        'comentario'=>'required|string',
        'horas_out'=>'required',
        'categoria_id'=>'required|exists:categorias,id'
       ]);

        $documento>update($validated);

        return redirect()->route('documentos.index')
                        ->with('success', 'Documento atualizado');
    }

   
    public function destroy(string $id)
    {
        $documento = Documento::find($id);

        if(isset($documento)){
            $documento->delete();

            return redirect()->route('documentos.index')
                    ->with('sucess', 'Documento excluido do sistema');
        }
        return '<h1>Não foi possível excluir esse documento do sistema</h1>';
    }
}
