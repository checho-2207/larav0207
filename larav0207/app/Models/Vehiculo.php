<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = "vehiculos";
    public $timestamps = false;
    protected $fillable = ["model", "color", "mileage", "make", "plate"];

    public function mantenimiento() {
        return $this->belongsTo(Mantenimiento::class);
    }
}
