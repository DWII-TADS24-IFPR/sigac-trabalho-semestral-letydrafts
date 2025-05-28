@extends('layouts.app')

@section('title', 'Novo Comprovante')

@section('content')
<div class="container">
    <h1>Novo Comprovante</h1>

    <form action="{{ route('comprovantes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Atividade</label>
            <input type="text" name="atividade" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Horas</label>
            <input type="number" name="horas" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Categoria</label>
            <select name="categoria_id" class="form-control" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Aluno</label>
            <select name="aluno_id" class="form-control" required>
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
