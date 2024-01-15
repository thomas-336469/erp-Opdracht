<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'conversation_date',
        'conversation_time',
        'spoken_with',
        'note',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
