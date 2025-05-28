@extends('layouts.app')

@section('title', 'Detalhes do Documento')

@section('content')
<div class="container main-content">
    <h1>Detalhes do Documento</h1>

    <p><strong>ID:</strong> {{ $documento->id }}</p>
    <p><strong>URL:</strong> {{ $documento->url }}</p>
    <p><strong>Descrição:</strong> {{ $documento->descricao }}</p>
    <p><strong>Horas In:</strong> {{ $documento->horas_in }}</p>
    <p><strong>Status:</strong> {{ $documento->status }}</p>
    <p><strong>Comentário:</strong> {{ $documento->comentario }}</p>
    <p><strong>Horas Out:</strong> {{ $documento->horas_out }}</p>
    <p><strong>Categoria:</strong> {{ $documento->categoria->nome ?? 'Sem categoria' }}</p>

    <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
