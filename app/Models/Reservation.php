<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "place_id",
        "dateStart",
        "timeStart",
        "dateEnd",
        "timeEnd"
    ];

    public function places(){
        return $this->belongsTo(Places::class);
    }
}
