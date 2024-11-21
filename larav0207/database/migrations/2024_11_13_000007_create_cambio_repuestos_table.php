<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cambio_repuestos', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->integer('stock');
            $table->string('name');
            $table->string('material');
            $table->timestamps();
            $table->foreignId('mantenimiento_id')->constrained('mantenimientos')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cambio_repuestos');
    }
};
