<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'organization_id',
        'membership_type_id',
        'start_date',
        'end_date',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function membershipType()
    {
        return $this->belongsTo(MembershipType::class);
    }
}