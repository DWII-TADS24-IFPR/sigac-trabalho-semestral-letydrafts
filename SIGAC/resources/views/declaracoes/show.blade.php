@extends('layouts.app')

@section('title', 'Detalhes da Declaração')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Detalhes da Declaração</h5>
            </div>
            <div class="card-body p-4">
                <h5 class="card-title">Declaração #{{ $declaracao->id }}</h5>
                <p class="card-text"><strong>Hash:</strong> {{ $declaracao->hash }}</p>
                <p class="card-text"><strong>Data:</strong> {{ $declaracao->data }}</p>
                <p class="card-text"><strong>Aluno:</strong> {{ $declaracao->aluno->nome ?? 'Sem aluno' }}</p>
                <p class="card-text"><strong>Comprovante:</strong> {{ $declaracao->comprovante->atividade ?? 'Sem comprovante' }}</p>

                <div class="mt-3">
                    <a href="{{ route('declaracoes.edit', $declaracao) }}" class="btn btn-purple-light">
                        <i class="bi bi-pencil"></i> Editar
                    </a>

                    <form action="{{ route('declaracoes.destroy', $declaracao) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir esta declaração?')">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>

                    <a href="{{ route('declaracoes.index') }}" class="btn btn-outline-purple-light">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
