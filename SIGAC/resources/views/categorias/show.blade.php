@extends('layouts.app')

@section('title', 'Detalhes da Categoria')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Detalhes da Categoria</h5>
            </div>
            <div class="card-body p-4">
                <h5 class="card-title">{{ $categoria->nome }}</h5>
                <p class="card-text"><strong>Máximo de Horas:</strong> {{ $categoria->maximo_horas }}</p>
                <p class="card-text"><strong>Curso:</strong> {{ $categoria->curso->nome ?? 'N/A' }}</p>

                <div class="mt-3">
                    <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-purple-light">
                        <i class="bi bi-pencil"></i> Editar
                    </a>

                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir esta categoria?')">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>

                    <a href="{{ route('categorias.index') }}" class="btn btn-outline-purple-light">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
