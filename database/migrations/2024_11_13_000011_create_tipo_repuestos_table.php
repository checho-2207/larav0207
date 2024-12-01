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
        Schema::create('tipo_repuestos', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('name');
            $table->string('make');
            $table->integer('total');
            $table->timestamps();
            $table->foreignId('proveedor_id')->constrained('proveedores')->cascadeOnDelete();
            $table->foreignId('cambio_id')->constrained('cambio_repuestos')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_repuestos');
    }
};