@extends('layouts.app')

@section('title', 'SIGAC - Níveis')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Lista de Níveis</h5>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('niveis.create') }}" class="btn btn-purple-light mb-3">Novo Nível</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($niveis as $nivel)
                            <tr>
                                <td>{{ $nivel->nome }}</td>
                                <td>
                                    <a href="{{ route('niveis.show', $nivel) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('niveis.edit', $nivel) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <form action="{{ route('niveis.destroy', $nivel) }}" method="POST" class="d-inline">
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
