<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CambioRepuesto extends Model
{
    use HasFactory;
    protected $table = "cambio_repuestos";
    public $timestamps = false;
    protected $fillable = ["stock", "name", "material",'mantenimiento_id'];

    public function mantenimiento() {
        return $this->belongsTo(Mantenimiento::class);
    }

    public function tiporepuesto() {
        return $this->hasMany(TipoRepuesto::class);
    }
}
