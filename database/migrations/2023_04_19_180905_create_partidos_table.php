<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id('id_partidos');
            $table->int('golesLocales')->nullable();
            $table->int('golesVisitantes')->nullable();
            $table->string('resultado')->nullable();
            $table->string('situacion');
            $table->date('fecha');
            $table->string('equipoLocal');
            $table->string('equipoVisitante');
            $table->string('ubicacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
