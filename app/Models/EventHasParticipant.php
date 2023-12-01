<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventHasParticipant extends Model
{
    use HasFactory;
    public $guarded = [];

    public function Events()
    {
        return $this->hasMany(Event::class);
    }

    public function Participants()
    {
        return $this->hasMany(Participant::class);
    }
}
