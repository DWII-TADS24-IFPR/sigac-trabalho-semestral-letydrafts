@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')
    <h1>Detalhes do Aluno</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $aluno->nome }}</h5>
            <p class="card-text"><strong>CPF:</strong> {{ $aluno->cpf }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $aluno->email }}</p>
            <p class="card-text"><strong>Curso:</strong> {{ $aluno->curso->nome }}</p>
            <p class="card-text"><strong>Turma:</strong> {{ $aluno->turma->nome }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-purple-light">
            <i class="bi bi-pencil"></i> Editar
        </a>

        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir este aluno?')">
                <i class="bi bi-trash"></i> Excluir
            </button>
        </form>

        <a href="{{ route('alunos.index') }}" class="btn btn-outline-purple-light">Voltar</a>
    </div>
@endsection
