<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('participacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participante_id')->constrained()->onDelete('cascade');
            $table->dateTime('fecha_hora');
            $table->integer('puntos')->default(5);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('participacions');
    }
};
