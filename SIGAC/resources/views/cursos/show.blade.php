@extends('layouts.app')

@section('title', 'Detalhes do Curso')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Detalhes do Curso</h5>
            </div>
            <div class="card-body p-4">
                <h5 class="card-title">{{ $curso->nome }}</h5>
                <p class="card-text"><strong>Sigla:</strong> {{ $curso->sigla }}</p>
                <p class="card-text"><strong>Total de Horas:</strong> {{ $curso->total_horas }}</p>
                <p class="card-text"><strong>Nível:</strong> {{ $curso->nivel->nome ?? 'N/A' }}</p>

                <div class="mt-3">
                    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-purple-light">
                        <i class="bi bi-pencil"></i> Editar
                    </a>

                    <form action="{{ route('cursos.destroy', $curso) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir este curso?')">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>

                    <a href="{{ route('cursos.index') }}" class="btn btn-outline-purple-light">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
