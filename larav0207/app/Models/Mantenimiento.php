<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    protected $table = "mantenimientos";
    public $timestamps = false;
    protected $fillable = ["type_maintenance", "date_start", "date_end", "warranty"];

    public function solicitudservicio() {
        return $this->belongsTo(SolicitudServicio::class);
    }

    public function factura() {
        return $this->hasOne(Factura::class);
    }

    public function vehiculo() {
        return $this->hasOne(Vehiculo::class);
    }

    public function cambiorepuesto() {
        return $this->hasMany(CambioRepuesto::class);
    }
}
