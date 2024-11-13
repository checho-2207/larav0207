<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoRepuesto extends Model
{
    protected $table = "tipo_repuestos";
    public $timestamps = false;
    protected $fillable = ["name", "make", "total"];

    public function cambiorepuestos() {
        return $this->belongsTo(CambioRepuesto::class);
    }

    public function proveedor() {
        return $this->belongsTo(Proveedor::class);
    }
}

