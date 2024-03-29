<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'classe',
        'cycle_id',
        'niveau_id',
    ];

    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }
     public function publication()
    {
        return $this->hasOne(Publication::class);
    }
}
