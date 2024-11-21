<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('model');
            $table->string('color');
            $table->string('mileage');
            $table->string('make');
            $table->string('plate');
            $table->timestamps();
            $table->foreignId('mantenimiento_id')->constrained('mantenimientos')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
