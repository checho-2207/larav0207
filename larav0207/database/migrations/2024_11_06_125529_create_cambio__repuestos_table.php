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
        Schema::create('cambio__repuestos', function (Blueprint $table) {
            $table->id();
            $table->integer('Cantidad');
            $table->string('Nombre');
            $table->string('Calidad');
            $table->foreignId('mantenimientoId')->references('id')->on('mantenimientos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambio__repuestos');
    }
};
