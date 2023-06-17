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
        Schema::create('ruta_paraderos', function (Blueprint $table) {
            $table->id();
            $table->string('num_ruta');
            $table->string('n_paradero');
            $table->string('hora_partida');
            $table->timestamps();

            $table->foreign('num_ruta')->references('id')
                ->on('rutas');

            $table->foreign('n_paradero')->references('id')
                ->on('paraderos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruta_paraderos');
    }
};
