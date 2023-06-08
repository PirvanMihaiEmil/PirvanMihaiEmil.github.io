<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website',
        'email',
        'phone',
        'address',
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function communications()
    {
        return $this->hasMany(Communication::class);
    }

    public function fundraisers()
    {
        return $this->hasMany(Fundraiser::class);
    }
}