<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Documento;

class DocumentoSeeder extends Seeder
{
    public function run()
    {
        Documento::create([
            'url' => 'https://example.com/doc1.pdf',
            'descricao' => 'Certificado de participação',
            'horas_in' => 10,
            'status' => 'pendente',
            'comentario' => 'Aguardando análise',
            'horas_out' => 3,
            'categoria_id' => 1,
        ]);
    }
}
