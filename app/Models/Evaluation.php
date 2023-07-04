<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = ['eleve_id', 'savoir_id', 'periode_id', 'code'];

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function savoir()
    {
        return $this->belongsTo(Savoir::class);
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }
}
