<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CambioRepuesto extends Model
{
    protected $table = "cambio_repuestos";
    public $timestamps = false;
    protected $fillable = ["stock", "name", "material"];

    public function mantenimiento() {
        return $this->belongsTo(Mantenimiento::class);
    }

    public function tiporepuesto() {
        return $this->hasMany(TipoRepuesto::class);
    }
}
