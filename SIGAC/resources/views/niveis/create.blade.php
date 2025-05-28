@extends('layouts.app')

@section('title', 'SIGAC - Novo Nível')

@section('content')
<div class="main-content">
    <div class="welcome-container">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-purple-light text-white py-3">
                <h5 class="mb-0">Novo Nível</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('niveis.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-purple-light">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
