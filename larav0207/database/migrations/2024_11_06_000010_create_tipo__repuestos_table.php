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
        Schema::create('tipo__repuestos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Marca');
            $table->integer('Costo');
            $table->foreignId('proveedoresId')->references('id')->on('proveedors');
            $table->foreignId('CambioDeRepuestosId')->references('id')->on('cambio__repuestos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo__repuestos');
    }
};
