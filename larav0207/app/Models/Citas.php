<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    protected $table = "citas";
    protected $fillable = ["date","description","status"];
    public $timestamps = false;

    public function solicitudServicio()
    {
        return $this->hasOne(SolicitudServicio::class);
    }
}
