<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundraiser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'goal_amount',
        'start_date',
        'end_date',
        'organization_id',
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}