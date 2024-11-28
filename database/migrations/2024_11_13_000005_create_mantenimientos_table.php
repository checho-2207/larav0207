<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('type_maintenance');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->boolean('warranty');
            $table->timestamps();
            $table->foreignId('solicitud_id')->constrained('solicitud_servicios')->cascadeOnDelete();
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mantenimientos');
    }
};
