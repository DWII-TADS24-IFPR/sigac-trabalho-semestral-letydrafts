@extends('layouts.app')

@section('title', 'SIGAC - Documentos')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Lista de Documentos</h5>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('documentos.create') }}" class="btn btn-purple-light mb-3">Novo Documento</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>URL</th>
                            <th>Horas In</th>
                            <th>Horas Out</th>
                            <th>Status</th>
                            <th>Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documentos as $documento)
                            <tr>
                                <td>{{ $documento->descricao }}</td>
                                <td><a href="{{ $documento->url }}" target="_blank">Visualizar</a></td>
                                <td>{{ $documento->horas_in }}</td>
                                <td>{{ $documento->horas_out }}</td>
                                <td>{{ ucfirst($documento->status) }}</td>
                                <td>{{ $documento->categoria->nome ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('documentos.show', $documento) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('documentos.edit', $documento) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('documentos.destroy', $documento) }}" method="POST" class="d-inline">
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
