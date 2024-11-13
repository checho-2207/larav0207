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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha_Pago');
            $table->integer('Cantidad');
            $table->enum('Metodo', ['Efectivo', 'Nequi']);
            /**Solo Efectivo o NEQUI*/
            $table->foreignId('facturaId')->references('id')->on('facturas');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
