<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'message',
        'communication_type',
        'sent_at',
        'organization_id',
    ];

    public function communicationRecipients()
    {
        return $this->hasMany(CommunicationRecipient::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}