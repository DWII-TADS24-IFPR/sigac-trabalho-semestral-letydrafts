@extends('layouts.app')

@section('title', 'SIGAC - Editar Curso')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Editar Curso</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('cursos.update', $curso) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="{{ $curso->nome }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Sigla</label>
                        <input type="text" name="sigla" class="form-control" value="{{ $curso->sigla }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Total de Horas</label>
                        <input type="number" name="total_horas" class="form-control" value="{{ $curso->total_horas }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Nível</label>
                        <select name="nivel_id" class="form-control" required>
                            @foreach($niveis as $nivel)
                                <option value="{{ $nivel->id }}" {{ $curso->nivel_id == $nivel->id ? 'selected' : '' }}>
                                    {{ $nivel->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-purple-light">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
