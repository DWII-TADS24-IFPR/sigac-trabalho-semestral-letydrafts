@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <h1>Editar Aluno</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome', $aluno->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" name="cpf" class="form-control" value="{{ old('cpf', $aluno->cpf) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $aluno->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso:</label>
            <select name="curso_id" class="form-select" required>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ $aluno->curso_id == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="turma_id" class="form-label">Turma:</label>
            <select name="turma_id" class="form-select" required>
                @foreach ($turmas as $turma)
                    <option value="{{ $turma->id }}" {{ $aluno->turma_id == $turma->id ? 'selected' : '' }}>
                        {{ $turma->ano }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-purple-light">Salvar Alterações</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-outline-purple-light">Cancelar</a>
    </form>
@endsection
