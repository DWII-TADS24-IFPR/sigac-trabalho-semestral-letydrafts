@extends('layouts.app')

@section('title', 'Editar Declaração')

@section('content')
<div class="container main-content">
    <h1>Editar Declaração</h1>

    <form action="{{ route('declaracoes.update', $declaracao) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="hash" class="form-label">Hash</label>
            <input type="text" class="form-control" name="hash" value="{{ $declaracao->hash }}" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" name="data" value="{{ $declaracao->data }}" required>
        </div>

        <div class="mb-3">
            <label for="aluno_id" class="form-label">Aluno</label>
            <select name="aluno_id" class="form-control">
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}" @if($declaracao->aluno_id == $aluno->id) selected @endif>{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="comprovante_id" class="form-label">Comprovante</label>
            <select name="comprovante_id" class="form-control">
                @foreach($comprovantes as $comprovante)
                    <option value="{{ $comprovante->id }}" @if($declaracao->comprovante_id == $comprovante->id) selected @endif>{{ $comprovante->atividade }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
