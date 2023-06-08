<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'location',
        'organization_id',
    ];

    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}