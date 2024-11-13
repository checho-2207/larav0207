<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->dateTime('date');
            $table->integer('total');
            $table->string('method');
            $table->foreignId('factura_id')->constrained('facturas')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
