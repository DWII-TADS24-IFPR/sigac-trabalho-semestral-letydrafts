@extends('layouts.app')

@section('title', 'SIGAC - Editar Nível')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Editar Nível</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('niveis.update', $nivel) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="{{ $nivel->nome }}" required>
                    </div>

                    <button type="submit" class="btn btn-purple-light">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
