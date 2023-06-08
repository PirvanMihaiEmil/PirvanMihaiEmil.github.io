<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'event_id',
        'registration_date',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}