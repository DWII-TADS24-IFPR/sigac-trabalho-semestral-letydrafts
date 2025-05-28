<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nivel;

class NivelSeeder extends Seeder
{
    public function run()
    {
        Nivel::create(['nome' => 'Ensino Médio']);
        Nivel::create(['nome' => 'Técnico']);
        Nivel::create(['nome' => 'Graduação']);
        Nivel::create(['nome' => 'Pós-graduação']);
    }
}
