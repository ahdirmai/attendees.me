<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    public $guarded = [];


    public function Associations()
    {
        return $this->hasMany(Association::class);
    }

    public function EventHasParticipants()
    {
        return $this->hasMany(EventHasParticipant::class);
    }


    public function Attendance()
    {
        return $this->morphOne(EventAttendance::class, 'Attendanceable');
    }
}
