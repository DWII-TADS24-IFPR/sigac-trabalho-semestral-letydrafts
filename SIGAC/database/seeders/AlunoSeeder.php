<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        Aluno::create([
            'nome' => 'Carlos Silva',
            'cpf' => '12345678901',
            'email' => 'carlos@teste.com',
            'senha' => bcrypt('senha123'),
            'curso_id' => 1,
            'turma_id' => 1,
        ]);

        Aluno::create([
            'nome' => 'Maria Oliveira',
            'cpf' => '98765432100',
            'email' => 'maria@teste.com',
            'senha' => bcrypt('senha123'),
            'curso_id' => 2,
            'turma_id' => 3,
        ]);

        Aluno::create([
            'nome' => 'João Santos',
            'cpf' => '45612378900',
            'email' => 'joao@teste.com',
            'senha' => bcrypt('senha123'),
            'curso_id' => 3,
            'turma_id' => 5,
        ]);
    }
}
