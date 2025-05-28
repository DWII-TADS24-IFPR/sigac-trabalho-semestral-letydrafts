<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comprovante;

class ComprovanteSeeder extends Seeder
{
    public function run()
    {
        Comprovante::create([
            'horas' => 10,
            'atividade' => 'Participação em seminário',
            'categoria_id' => 1,
            'aluno_id' => 1,
        ]);

        Comprovante::create([
            'horas' => 15,
            'atividade' => 'Estágio supervisionado',
            'categoria_id' => 2,
            'aluno_id' => 1,
        ]);

        Comprovante::create([
            'horas' => 8,
            'atividade' => 'Feira de negócios',
            'categoria_id' => 3,
            'aluno_id' => 2,
        ]);
    }
}
