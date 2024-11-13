<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = "pagos";
    public $timestamps = false;
    protected $fillable = ["date", "total", "method"];

    public function factura() {
        return $this->hasMany(Factura::class);
    }
}
