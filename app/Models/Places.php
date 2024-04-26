<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        'HourPrice',
        'description',
        'amenities',
        'type_id',
    ];

    public function types(){
        return $this->belongsTo(Types::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
