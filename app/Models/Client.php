<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // Your existing fields and methods...

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }
}
