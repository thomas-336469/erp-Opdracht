<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'first_name',
        'last_name',
        'email',
        'phone',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
