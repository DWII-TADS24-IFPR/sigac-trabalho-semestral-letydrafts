<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome'=>'required|string|min:3',
            'cpf'=>'required|numeric|digits:11|unique:alunos,cpf',
            'email'=>'required|email|unique:alunos,email',
            'senha'=>'required|string|min:8']);

            Aluno::create($request->all());
            return redirect()->route('alunos.index')
                            ->with('sucess', 'Aluno criado no sistema.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);

        if(isset($aluno)){
            $aluno->nome = $required->nome;
            $aluno->cpf = $required->cpf;
            $aluno->email = $required->email;
            $aluno->senha = $required->senha;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Alunos::find($id);

        if(isset($aluno)){
            $aluno->delete();
            return '<h1>Aluno excluido do sistema.</h1>';
        }

        return '<h1>Não foi possível excluir esse registro do sistema</h1>';
    }
}
