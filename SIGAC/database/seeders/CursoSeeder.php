<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run()
    {
        Curso::create([
            'nome' => 'Engenharia de Software',
            'sigla' => 'ESW',
            'total_horas' => 3200,
            'nivel_id' => 3,
        ]);

        Curso::create([
            'nome' => 'Administração',
            'sigla' => 'ADM',
            'total_horas' => 3000,
            'nivel_id' => 3,
        ]);

        Curso::create([
            'nome' => 'Técnico em Informática',
            'sigla' => 'TI',
            'total_horas' => 1200,
            'nivel_id' => 2,
        ]);
    }
}
