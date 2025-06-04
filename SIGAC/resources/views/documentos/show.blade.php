@extends('layouts.app')

@section('title', 'Detalhes do Documento')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Detalhes do Documento</h5>
            </div>
            <div class="card-body p-4">
                <h5 class="card-title">Documento #{{ $documento->id }}</h5>
                <p class="card-text"><strong>URL:</strong> {{ $documento->url }}</p>
                <p class="card-text"><strong>Descrição:</strong> {{ $documento->descricao }}</p>
                <p class="card-text"><strong>Horas In:</strong> {{ $documento->horas_in }}</p>
                <p class="card-text"><strong>Status:</strong> {{ $documento->status }}</p>
                <p class="card-text"><strong>Comentário:</strong> {{ $documento->comentario }}</p>
                <p class="card-text"><strong>Horas Out:</strong> {{ $documento->horas_out }}</p>
                <p class="card-text"><strong>Categoria:</strong> {{ $documento->categoria->nome ?? 'Sem categoria' }}</p>

                <div class="mt-3">
                    <a href="{{ route('documentos.edit', $documento) }}" class="btn btn-purple-light">
                        <i class="bi bi-pencil"></i> Editar
                    </a>

                    <form action="{{ route('documentos.destroy', $documento) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir este documento?')">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>

                    <a href="{{ route('documentos.index') }}" class="btn btn-outline-purple-light">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
