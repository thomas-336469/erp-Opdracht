<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'company_name',
        'kvk_number',
        'first_name',
        'last_name',
        'street',
        'house_number',
        'postcode',
        'city',
        'email',
        'phone_number',
        'function',
    ];
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }
}
