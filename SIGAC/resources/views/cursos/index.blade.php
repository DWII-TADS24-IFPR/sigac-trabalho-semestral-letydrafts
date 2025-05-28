@extends('layouts.app')

@section('title', 'SIGAC - Cursos')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Lista de Cursos</h5>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('cursos.create') }}" class="btn btn-purple-light mb-3">Novo Curso</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sigla</th>
                            <th>Total de Horas</th>
                            <th>Nível</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($cursos as $curso)
                            <tr>
                                <td>{{ $curso->nome }}</td>
                                <td>{{ $curso->sigla }}</td>
                                <td>{{ $curso->total_horas }}</td>
                                <td>{{ $curso->nivel->nome ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('cursos.show', $curso) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('cursos.destroy', $curso) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Nenhum curso encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
