<?php

// app/Models/Planification.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planification extends Model
{
    protected $fillable = ['savoir_id', 'periode_id', 'actif', 'niveau_id'];

    public function savoir()
    {
        return $this->belongsTo(Savoir::class);
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }
}
