<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    public $guarded = [];

    public function participant()
    {
        return $this->hasOne(Participant::class);
    }

    public function Attendance()
    {
        return $this->morphOne(EventAttendance::class, 'Attendanceable');
    }
}
