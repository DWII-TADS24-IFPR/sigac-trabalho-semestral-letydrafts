<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nivel;

class NivelController extends Controller
{
    
    public function index()
    {
        $niveis = Nivel::all();
        return view('niveis.index', compact('niveis'));
    }

    
    public function create()
    {
        return view('niveis.create', compact('niveis'));
    }

    
    public function store(Request $request)
    {
       $validated = $request->validate([
        'nome'=>'required|string|min:3']);

       Nivel::create($request->all());

       return redirect()->route('niveis.index')
                            ->with('sucess', 'Nivel adicionado ao sistema.');
    }

    
    public function show(string $id)
    {
        $nivel = Nivel::find($id);
        return view('niveis.show', compact('nivel'));
    }

    
    public function edit(string $id)
    {
        $nivel = Nivel::find($id);
        return view('niveis.edit', compact('niveis'));
    }

   
    public function update(Request $request, string $id)
    {
        $nivel = Nivel::find($id);

        $validated = $request->validate([
            'nome'=>'required|string|min:3'
           ]);
           
        $nivel->update($validated);

        return redirect()->route('niveis.index')
                        ->with('success', 'Nivel atualizado com sucesso.');

    }

    
    public function destroy(string $id)
    {
        $nivel = Nivel::find($id);

        if(isset($nivel)){
            $nivel->delete();

            return redirect()->route('niveis.index')
                    ->with('sucess', 'Nivel excluido do sistema');
        }

        return '<h1>Não foi possível excluir esse nivel do sistema</h1>';
    }
}
