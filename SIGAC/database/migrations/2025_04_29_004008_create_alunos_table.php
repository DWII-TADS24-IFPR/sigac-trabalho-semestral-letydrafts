<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Curso;
use App\Models\Turma;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('email');
            $table->string('senha');
            $table->foreignIdFor(Curso::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Turma::class)->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
