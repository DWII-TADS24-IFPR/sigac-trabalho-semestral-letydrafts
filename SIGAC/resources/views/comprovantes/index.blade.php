@extends('layouts.app')

@section('title', 'SIGAC - Comprovantes')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Lista de Comprovantes</h5>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('comprovantes.create') }}" class="btn btn-purple-light mb-3">Novo Comprovante</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            <th>Atividade</th>
                            <th>Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comprovantes as $comprovante)
                            <tr>
                                <td>{{ $comprovante->aluno->nome ?? 'N/A' }}</td>
                                <td>{{ $comprovante->atividade ?? 'N/A' }}</td>
                                <td>{{ $comprovante->categoria->nome ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('comprovantes.show', $comprovante) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('comprovantes.pdf', $comprovante->id) }}" class="btn btn-sm btn-outline-success">PDF</a>
                                    <a href="{{ route('comprovantes.edit', $comprovante) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('comprovantes.destroy', $comprovante) }}" method="POST" class="d-inline">
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
