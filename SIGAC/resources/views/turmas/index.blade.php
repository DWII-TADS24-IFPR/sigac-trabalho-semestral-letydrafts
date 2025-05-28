@extends('layouts.app')

@section('title', 'SIGAC - Turmas')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Lista de Turmas</h5>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('turmas.create') }}" class="btn btn-purple-light mb-3">Nova Turma</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Ano</th>
                            <th>Curso</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($turmas as $turma)
                            <tr>
                                <td>{{ $turma->ano }}</td>
                                <td>{{ $turma->curso->nome ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('turmas.show', $turma) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('turmas.edit', $turma) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('turmas.destroy', $turma) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
