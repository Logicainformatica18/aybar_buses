<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['description', 'detail'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
