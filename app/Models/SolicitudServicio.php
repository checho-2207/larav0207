<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class SolicitudServicio extends Model
{

    use HasFactory;

    protected $fillable = ['usuario_id', 'citas_id'];
    protected $table = "solicitud_servicios";
    public $timestamps = false;

    public function usuarios() {
        return $this->belongsTo(usuario::class);//borre la S
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
