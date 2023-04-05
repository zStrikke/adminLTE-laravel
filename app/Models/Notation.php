<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;

    /**
     * Get the user that wrote the notation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the client that received the notation
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
