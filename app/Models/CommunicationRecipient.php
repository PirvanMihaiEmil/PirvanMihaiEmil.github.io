<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunicationRecipient extends Model
{
    use HasFactory;

    protected $fillable = [
        'communication_id',
        'contact_id',
        'read_at',
    ];

    public function communication()
    {
        return $this->belongsTo(Communication::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}