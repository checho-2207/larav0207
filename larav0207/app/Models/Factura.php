<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = "facturas";
    public $timestamps = false;
    protected $fillable = ["details", "date",'mantenimiento_id'];

    public function mantenimiento() {
        return $this->belongsTo(Mantenimiento::class);
    }
}
