@extends('layouts.app')

@section('title', 'SIGAC - Nova Categoria')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Nova Categoria</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('categorias.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Máximo de Horas</label>
                        <input type="number" name="maximo_horas" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Curso</label>
                        <select name="curso_id" class="form-control" required>
                            <option value="">Selecione...</option>
                            @foreach($cursos as $curso)
                                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-purple-light">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
