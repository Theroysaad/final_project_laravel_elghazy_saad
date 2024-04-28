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
        "timeEnd",
        'user_id',
        'price'
    ];

/**
     * Get the user that owns the reservation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the place that owns the reservation.
     */
    public function place()
    {
        return $this->belongsTo(Places::class);
    }

}
