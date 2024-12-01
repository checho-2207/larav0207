<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = "proveedores";
    public $timestamps = false;
    protected $fillable = ["name",'description', 'number', 'email'];

    public function tiporepuesto() {
        return $this->hasMany(TipoRepuesto::class);
    }
}
