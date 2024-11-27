<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    protected $table = "citas";
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'city', 'neighborhood', 'address', 'vehicle_brand', 'vehicle_model', 'plate_number', 'mileage', 'service_type', 'suggested_date', 'suggested_time', 'comments',];
    public $timestamps = false;

    public function solicitudServicio()
    {
        return $this->hasOne(SolicitudServicio::class);
    }
}
