@extends('layouts.app')

@section('title', 'SIGAC - Categorias')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Lista de Categorias</h5>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('categorias.create') }}" class="btn btn-purple-light mb-3">Nova Categoria</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Máximo de Horas</th>
                            <th>Curso</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->nome }}</td>
                                <td>{{ $categoria->maximo_horas }}</td>
                                <td>{{ $categoria->curso->nome ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('categorias.show', $categoria) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline">
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
