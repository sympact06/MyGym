<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sessies extends Model
{
    use HasFactory;

    protected $casts = [
        'starting' => 'datetime',
    ];

    public function gebruikers_deelnemend()
    {
    }
}
