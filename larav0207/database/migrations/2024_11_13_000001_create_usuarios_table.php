<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('names');
            $table->integer('ide');
            $table->integer('number');
            $table->string('adress');
            $table->string('email');
            $table->string('password');
            $table->string('confirmacion');
            $table->enum('rol', ['Usuario','Vendor','Admin']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
