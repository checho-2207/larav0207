<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedores";
    public $timestamps = false;
    protected $fillable = ["name", "make", "total"];

    public function tiporepuesto() {
        return $this->hasMany(TipoRepuesto::class);
    }
}
