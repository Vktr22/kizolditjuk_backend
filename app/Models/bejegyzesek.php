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

    // relational helper: bejegyzes -> tevekenyseg
    public function tevekenyseg()
    {
        return $this->belongsTo(\App\Models\Tevekenyseg::class, 'tevekenyseg_id');
    }

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
