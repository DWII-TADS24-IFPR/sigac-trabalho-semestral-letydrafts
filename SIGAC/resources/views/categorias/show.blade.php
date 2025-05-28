@extends('layouts.app')

@section('title', 'SIGAC - Categoria')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Detalhes da Categoria</h5>
            </div>
            <div class="card-body p-4">
                <p><strong>Nome:</strong> {{ $categoria->nome }}</p>
                <p><strong>Máximo de Horas:</strong> {{ $categoria->maximo_horas }}</p>
                <p><strong>Curso:</strong> {{ $categoria->curso->nome ?? 'N/A' }}</p>

                <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-outline-secondary">Editar</a>
                <a href="{{ route('categorias.index') }}" class="btn btn-outline-primary">Voltar</a>
            </div>
        </div>
    </div>
</div>
@endsection
