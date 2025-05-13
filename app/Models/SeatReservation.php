<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatReservation extends Model
{
    protected $fillable = [
        'schedule_id',
        'seat_number',
        'customer_name',
        'dni',
        'phone',
        'user_id',
        'email',
        'file',
        'business_partner_text'

    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
