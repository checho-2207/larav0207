<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudServicio extends Model
{
    protected $table = "solicitud_servicios";
    public $timestamps = false;

    public function usuarios() {
        return $this->belongsTo(Usuarios::class);
    }

    public function cita()
    {
        return $this->belongsTo(Citas::class);
    }

    public function mantenimiento()
    {
        return $this->hasOne(Mantenimiento::class);
    }
}
