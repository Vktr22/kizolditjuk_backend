<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bejegyzesek extends Model
{
    /** @use HasFactory<\Database\Factories\BejegyzesekFactory> */
    use HasFactory;

    protected $fillable = [
        'tevekenyseg_id',
        'osztaly_nev',
        'allapot',
    ];

    public function getAllapotLabelAttribute(): string
    {
        return $this->allapot ? 'Elfogadva' : 'Nincs elfogadva';
    }

    protected function casts(): array
    {
        return [
            'allapot' => 'boolean',
        ];
    }
}
