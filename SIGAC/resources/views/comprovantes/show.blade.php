@extends('layouts.app')

@section('title', 'Detalhes do Comprovante')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Detalhes do Comprovante</h5>
            </div>
            <div class="card-body p-4">
                <h5 class="card-title">Comprovante #{{ $comprovante->id }}</h5>
                <p class="card-text"><strong>Atividade:</strong> {{ $comprovante->atividade }}</p>
                <p class="card-text"><strong>Horas:</strong> {{ $comprovante->horas }}</p>
                <p class="card-text"><strong>Categoria:</strong> {{ $comprovante->categoria->nome ?? 'Sem Categoria' }}</p>
                <p class="card-text"><strong>Aluno:</strong> {{ $comprovante->aluno->nome ?? 'Sem Aluno' }}</p>

                <div class="mt-3">
                    <a href="{{ route('comprovantes.edit', $comprovante) }}" class="btn btn-purple-light">
                        <i class="bi bi-pencil"></i> Editar
                    </a>

                    <form action="{{ route('comprovantes.destroy', $comprovante) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir este comprovante?')">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>

                    <a href="{{ route('comprovantes.index') }}" class="btn btn-outline-purple-light">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
