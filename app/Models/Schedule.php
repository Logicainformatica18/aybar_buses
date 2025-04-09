<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'project_id',
        'bus_id',
        'date',
        'time',
        'status',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function seatReservations()
    {
        return $this->hasMany(SeatReservation::class);
    }
}
