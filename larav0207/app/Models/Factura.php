<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = "facturas";
    public $timestamps = false;
    protected $fillable = ["details", "date"];

    public function mantenimiento() {
        return $this->belongsTo(Mantenimiento::class);
    }
}
