@extends('layouts.app')

@section('title', 'Editar Comprovante')

@section('content')
<div class="container">
    <h1>Editar Comprovante</h1>

    <form action="{{ route('comprovantes.update', $comprovante->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Atividade</label>
            <input type="text" name="atividade" class="form-control" value="{{ $comprovante->atividade }}" required>
        </div>

        <div class="mb-3">
            <label>Horas</label>
            <input type="number" name="horas" class="form-control" value="{{ $comprovante->horas }}" required>
        </div>

        <div class="mb-3">
            <label>Categoria</label>
            <select name="categoria_id" class="form-control" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" @if($comprovante->categoria_id == $categoria->id) selected @endif>
                        {{ $categoria->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Aluno</label>
            <select name="aluno_id" class="form-control" required>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}" @if($comprovante->aluno_id == $aluno->id) selected @endif>
                        {{ $aluno->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
