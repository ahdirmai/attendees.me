<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public $guarded = [];


    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function EventAttendance()
    {
        return $this->hasMany(EventAttendance::class);
    }

    public function EventHasParticipants()
    {
        return $this->hasMany(EventHasParticipant::class);
    }
}
