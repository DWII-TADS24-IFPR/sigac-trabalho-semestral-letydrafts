<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Categoria;
use App\Models\Aluno;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comprovantes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->float('horas');
            $table->string('atividade');
            $table->foreignIdFor(Categoria::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Aluno::class)->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprovantes');
    }
};
