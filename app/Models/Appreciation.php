<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appreciation extends Model
{
    use HasFactory;

    protected $fillable = [
        'eleve_id',
        'periode_id',
        'content',
    ];

    // Relation avec le modèle d'élève
    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
}
