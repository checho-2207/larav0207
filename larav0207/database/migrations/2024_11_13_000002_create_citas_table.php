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
        Schema::create('citas', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('first_name');
        $table->string('last_name');
        $table->string('email');
        $table->string('phone');
        $table->string('city');
        $table->string('neighborhood');
        $table->string('address');
        $table->string('vehicle_brand');
        $table->string('vehicle_model');
        $table->string('plate_number');
        $table->integer('mileage');
        $table->string('service_type');
        $table->date('suggested_date');
        $table->time('suggested_time');
        $table->text('comments')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
