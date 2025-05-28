@extends('layouts.app')

@section('title', 'Detalhes da Turma')

@section('content')
<div class="container main-content">
    <h1>Detalhes da Turma</h1>

    <p><strong>ID:</strong> {{ $turma->id }}</p>
    <p><strong>Curso:</strong> {{ $turma->curso->nome ?? 'Sem curso' }}</p>
    <p><strong>Ano:</strong> {{ $turma->ano }}</p>

    <a href="{{ route('turmas.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
