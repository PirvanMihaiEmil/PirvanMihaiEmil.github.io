<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'organization_id',
    ];

    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }

    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    public function communicationRecipients()
    {
        return $this->hasMany(CommunicationRecipient::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}