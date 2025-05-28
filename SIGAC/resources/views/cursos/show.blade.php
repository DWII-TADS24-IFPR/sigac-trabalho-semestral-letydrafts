@extends('layouts.app')

@section('title', 'SIGAC - Curso')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Detalhes do Curso</h5>
            </div>
            <div class="card-body p-4">
                <p><strong>Nome:</strong> {{ $curso->nome }}</p>
                <p><strong>Sigla:</strong> {{ $curso->sigla }}</p>
                <p><strong>Total de Horas:</strong> {{ $curso->total_horas }}</p>
                <p><strong>Nível:</strong> {{ $curso->nivel->nome ?? 'N/A' }}</p>

                <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-outline-secondary">Editar</a>
                <a href="{{ route('cursos.index') }}" class="btn btn-outline-primary">Voltar</a>
            </div>
        </div>
    </div>
</div>
@endsection
