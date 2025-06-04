@extends('layouts.app')

@section('title', 'SIGAC - Alunos')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Lista de Alunos</h5>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('alunos.create') }}" class="btn btn-purple-light mb-3">Novo Aluno</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Curso</th>
                            <th>Turma</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ $aluno->cpf }}</td>
                                <td>{{ $aluno->email }}</td>
                                <td>{{ $aluno->curso->nome ?? 'N/A' }}</td>
                                <td>{{ $aluno->turma->ano ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('alunos.show', $aluno) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('alunos.edit', $aluno) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('alunos.destroy', $aluno) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">Nenhum aluno encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
