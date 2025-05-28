<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        Categoria::create([
            'nome' => 'Estágios',
            'maximo_horas' => 300,
            'curso_id' => 1,
        ]);

        Categoria::create([
            'nome' => 'Projetos',
            'maximo_horas' => 200,
            'curso_id' => 1,
        ]);

        Categoria::create([
            'nome' => 'Eventos',
            'maximo_horas' => 150,
            'curso_id' => 2,
        ]);

        Categoria::create([
            'nome' => 'Trabalhos em grupo',
            'maximo_horas' => 100,
            'curso_id' => 3,
        ]);
    }
}
