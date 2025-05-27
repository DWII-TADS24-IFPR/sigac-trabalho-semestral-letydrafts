<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Aluno;
use App\Models\Comprovante;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('declaracoes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('hash');
            $table->dateTime('data');
            $table->foreignIdFor(Aluno::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Comprovante::class)->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declaracoes');
    }
};
