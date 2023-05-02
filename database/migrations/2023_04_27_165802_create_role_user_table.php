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
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_rol');
            $table->foreign("id_user")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table->foreign("id_rol")
                ->references("id_rol")
                ->on("roles")
                ->onDelete("cascade");
            $table->unique(['id_user','id_rol']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
