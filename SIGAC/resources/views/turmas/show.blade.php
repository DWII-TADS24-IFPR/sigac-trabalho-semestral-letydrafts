@extends('layouts.app')

@section('title', 'Detalhes da Turma')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Detalhes da Turma</h5>
            </div>
            <div class="card-body p-4">
                <h5 class="card-title">Turma #{{ $turma->id }}</h5>
                <p class="card-text"><strong>Curso:</strong> {{ $turma->curso->nome ?? 'Sem curso' }}</p>
                <p class="card-text"><strong>Ano:</strong> {{ $turma->ano }}</p>

                <div class="mt-3">
                    <a href="{{ route('turmas.edit', $turma) }}" class="btn btn-purple-light">
                        <i class="bi bi-pencil"></i> Editar
                    </a>

                    <form action="{{ route('turmas.destroy', $turma) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir esta turma?')">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>

                    <a href="{{ route('turmas.index') }}" class="btn btn-outline-purple-light">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
