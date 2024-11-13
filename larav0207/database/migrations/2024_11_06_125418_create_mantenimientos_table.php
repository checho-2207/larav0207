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
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_mantenimineto', ['Preventivo', 'Correctivo', 'Predictivo']);
            $table->date('Fecha_Inicial');
            $table->date('Fecha_Final');
            $table->string('Garantia');
            $table->foreignId('vehiculoId')->references('id')->on('vehiculos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimientos');
    }
};
