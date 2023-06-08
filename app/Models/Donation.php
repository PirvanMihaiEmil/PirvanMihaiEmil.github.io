<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'fundraiser_id',
        'amount',
        'donation_date',
        'payment_method',
        'payment_status',
        'transaction_id',
        'notes',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function fundraiser()
    {
        return $this->belongsTo(Fundraiser::class);
    }
}