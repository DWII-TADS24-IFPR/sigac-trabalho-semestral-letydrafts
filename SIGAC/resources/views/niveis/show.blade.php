@extends('layouts.app')

@section('title', 'SIGAC - Nível')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Detalhes do Nível</h5>
            </div>
            <div class="card-body p-4">
                <p><strong>Nome:</strong> {{ $nivel->nome }}</p>

                <a href="{{ route('niveis.edit', $nivel) }}" class="btn btn-outline-secondary">Editar</a>
                <a href="{{ route('niveis.index') }}" class="btn btn-outline-primary">Voltar</a>
            </div>
        </div>
    </div>
</div>
@endsection
