<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = "usuarios";
    protected $fillable = ["names","ide","number","adress","email","rol",];
    public $timestamps = false;

    public function solicitudServicio()
    {
        return $this->hasMany(SolicitudServicio::class);
    }
}
