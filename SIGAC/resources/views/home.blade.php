@extends('layouts.app')

@section('title', 'SIGAC - Home')

@section('content')
<div class="container">
    <div class="main-content" style="margin-left: 250px; padding: 20px; min-height: calc(100vh - 60px);">
        <div class="welcome-container" style="max-width: 700px; margin: 0 auto;">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-purple-light text-white py-3">
                    <h5 class="mb-0">
                        <i class="bi bi-house-door me-2"></i> Painel Principal
                    </h5>
                </div>
                <div class="card-body p-4">
                    <div class="text-center">
                        <i class="bi bi-book text-purple-light" style="font-size: 2.5rem;"></i>
                        <h3 class="text-purple-light mt-3">Bem-vindo ao SIGAC</h3>
                        <p class="text-muted mb-4">Sistema Integrado de Gestão Acadêmica</p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ url('alunos') }}" class="btn btn-purple-light px-4">
                                <i class="bi bi-people me-1"></i> Alunos
                            </a>
                            <a href="{{ url('cursos') }}" class="btn btn-outline-purple-light px-4">
                                <i class="bi bi-journal-bookmark me-1"></i> Cursos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .main-content {
            position: relative;
            overflow: hidden;
        }

        .welcome-container {
            width: 100%;
            padding: 0 20px;
        }

        .bg-purple-light {
            background-color: #9c88ff;
        }
        .text-purple-light {
            color: #9c88ff;
        }

        .btn-purple-light {
            background-color: #9c88ff;
            color: white;
            border: none;
            transition: all 0.2s;
        }

        .btn-purple-light:hover {
            opacity: 0.8;
        }

        .btn-outline-purple-light {
            border: 1px solid #9c88ff;
            color: #9c88ff;
            transition: all 0.2s;
        }

        .btn-outline-purple-light:hover {
            background-color: #9c88ff;
            color: white;
        }
    </style>
</div>
@endsection
