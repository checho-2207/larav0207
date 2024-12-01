<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRepuesto extends Model
{
    use HasFactory;
    protected $table = "tipo_repuestos";
    public $timestamps = false;
    protected $fillable = ["name", "make", "total",'proveedor_id', 'cambio_id'];

    public function cambiorepuestos() {
        return $this->belongsTo(CambioRepuesto::class);
    }

    public function proveedor() {
        return $this->belongsTo(Proveedor::class);
    }
}

