<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = "vehiculos";
    public $timestamps = false;
    protected $fillable = ["model", "color", "mileage", "make", "plate",'mantenimiento_id'];

    public function mantenimiento() {
        return $this->belongsTo(Mantenimiento::class);
    }
}
