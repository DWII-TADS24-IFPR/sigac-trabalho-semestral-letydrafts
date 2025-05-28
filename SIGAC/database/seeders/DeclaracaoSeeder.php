<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Declaracao;
use Illuminate\Support\Str;

class DeclaracaoSeeder extends Seeder
{
    public function run()
    {
        Declaracao::create([
            'hash' => Str::uuid(),
            'data' => now(),
            'aluno_id' => 1,
            'comprovante_id' => 1,
        ]);
    }
}
