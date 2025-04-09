<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = ['description', 'seat_count'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
