@extends('layouts.app')

@section('title', 'Novo Documento')

@section('content')
<div class="container main-content">
    <h1>Criar Novo Documento</h1>

    <form action="{{ route('documentos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="text" class="form-control" name="url" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="descricao" required>
        </div>

        <div class="mb-3">
            <label for="horas_in" class="form-label">Horas In</label>
            <input type="number" class="form-control" name="horas_in">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" name="status">
        </div>

        <div class="mb-3">
            <label for="comentario" class="form-label">Comentário</label>
            <textarea class="form-control" name="comentario"></textarea>
        </div>

        <div class="mb-3">
            <label for="horas_out" class="form-label">Horas Out</label>
            <input type="number" class="form-control" name="horas_out">
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select name="categoria_id" class="form-control">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
