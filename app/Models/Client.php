<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * Get the notations that the client received.
     */
    public function notations()
    {
        return $this->hasMany(Notation::class);
    }
}
