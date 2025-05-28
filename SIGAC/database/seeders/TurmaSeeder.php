<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Turma;

class TurmaSeeder extends Seeder
{
    public function run()
    {
        Turma::create(['curso_id' => 1, 'ano' => 2023]);
        Turma::create(['curso_id' => 1, 'ano' => 2024]);

        Turma::create(['curso_id' => 2, 'ano' => 2023]);
        Turma::create(['curso_id' => 2, 'ano' => 2024]);

        Turma::create(['curso_id' => 3, 'ano' => 2023]);
    }
}
