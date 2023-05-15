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
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_partido');
            $table->date('fecha');
            $table->string('seccion');
            $table->string('fila');
            $table->string('numero');
            $table->string('precio');
            $table->timestamps();
            $table->foreign("id_user")
                ->references("id")
                ->on("users")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->foreign("id_partido")
                ->references("id")
                ->on("partidos")
                ->onDelete("cascade")
                ->onUpdate("cascade");
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};
