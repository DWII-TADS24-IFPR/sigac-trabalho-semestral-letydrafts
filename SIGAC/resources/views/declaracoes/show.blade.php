@extends('layouts.app')

@section('title', 'Detalhes da Declaração')

@section('content')
<div class="container main-content">
    <h1>Detalhes da Declaração</h1>

    <p><strong>ID:</strong> {{ $declaracao->id }}</p>
    <p><strong>Hash:</strong> {{ $declaracao->hash }}</p>
    <p><strong>Data:</strong> {{ $declaracao->data }}</p>
    <p><strong>Aluno:</strong> {{ $declaracao->aluno->nome ?? 'Sem aluno' }}</p>
    <p><strong>Comprovante:</strong> {{ $declaracao->comprovante->atividade ?? 'Sem comprovante' }}</p>

    <a href="{{ route('declaracoes.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
