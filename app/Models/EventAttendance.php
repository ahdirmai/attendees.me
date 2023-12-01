<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAttendance extends Model
{
    use HasFactory;

    public $guarded = [];

    public function Events()
    {
        return $this->hasMany(Event::class);
    }

    public function Attendanceable()
    {
        return $this->morphTo();
    }
}
