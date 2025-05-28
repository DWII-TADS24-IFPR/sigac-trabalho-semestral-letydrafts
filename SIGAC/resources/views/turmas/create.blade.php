@extends('layouts.app')

@section('title', 'Nova Turma')

@section('content')
<div class="container main-content">
    <h1>Criar Nova Turma</h1>

    <form action="{{ route('turmas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select name="curso_id" class="form-control" required>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" name="ano" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
