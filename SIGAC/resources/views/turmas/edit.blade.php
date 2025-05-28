@extends('layouts.app')

@section('title', 'Editar Turma')

@section('content')
<div class="container main-content">
    <h1>Editar Turma</h1>

    <form action="{{ route('turmas.update', $turma) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select name="curso_id" class="form-control" required>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" @if($turma->curso_id == $curso->id) selected @endif>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" name="ano" value="{{ $turma->ano }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
