@extends('layouts.app')

@section('title', 'Nova Declaração')

@section('content')
<div class="container main-content">
    <h1>Criar Nova Declaração</h1>

    <form action="{{ route('declaracoes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="hash" class="form-label">Hash</label>
            <input type="text" class="form-control" name="hash" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" name="data" required>
        </div>

        <div class="mb-3">
            <label for="aluno_id" class="form-label">Aluno</label>
            <select name="aluno_id" class="form-control">
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="comprovante_id" class="form-label">Comprovante</label>
            <select name="comprovante_id" class="form-control">
                @foreach($comprovantes as $comprovante)
                    <option value="{{ $comprovante->id }}">{{ $comprovante->atividade }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
