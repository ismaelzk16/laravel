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
            $table->id('id');
            $table->integer('golesLocales')->nullable();
            $table->integer('golesVisitantes')->nullable();
            $table->string('jornada');
            $table->string('situacion');
            $table->date('fecha');
            $table->string('equipoLocal');
            $table->string('equipoVisitante');
            $table->string('ubicacion');
            $table->timestamps();
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
