@extends('layouts.app')

@section('title', 'SIGAC - Declarações')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Lista de Declarações</h5>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('declaracoes.create') }}" class="btn btn-purple-light mb-3">Nova Declaração</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Data de Emissão</th>
                            <th>Aluno</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($declaracoes as $declaracao)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($declaracao->data_emissao)->format('d/m/Y') }}</td>
                                <td>{{ $declaracao->aluno->nome ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('declaracoes.show', $declaracao) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('declaracoes.edit', $declaracao) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('declaracoes.destroy', $declaracao) }}" method="POST" class="d-inline">
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
