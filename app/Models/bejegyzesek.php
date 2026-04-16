<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bejegyzesek extends Model
{
    /** @use HasFactory<\Database\Factories\BejegyzesekFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'allapot' => 'boolean',
        ];
    }
}
