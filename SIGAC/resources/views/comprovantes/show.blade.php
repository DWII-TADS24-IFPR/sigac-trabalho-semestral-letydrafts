@extends('layouts.app')

@section('title', 'Detalhes do Comprovante')

@section('content')
<div class="container">
    <h1>Detalhes do Comprovante</h1>

    <p><strong>ID:</strong> {{ $comprovante->id }}</p>
    <p><strong>Atividade:</strong> {{ $comprovante->atividade }}</p>
    <p><strong>Horas:</strong> {{ $comprovante->horas }}</p>
    <p><strong>Categoria:</strong> {{ $comprovante->categoria->nome ?? 'Sem Categoria' }}</p>
    <p><strong>Aluno:</strong> {{ $comprovante->aluno->nome ?? 'Sem Aluno' }}</p>

    <a href="{{ route('comprovantes.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
