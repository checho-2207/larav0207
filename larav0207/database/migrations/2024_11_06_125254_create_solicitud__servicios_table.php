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
        Schema::create('solicitud__servicios', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Vehiculo');
            $table->date('Fecha_solicitada');
            $table->foreignid('usuarioid')->references('id')->on('usuarios');
            $table->foreignid('vehiculoid')->referencess('id')->on('vehiculos');
            $table->foreignId('citaid')->references('id')->on('citas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud__servicios');
    }
};
