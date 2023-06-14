<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Savoir extends Model
{
    protected $fillable = ['competence_id', 'periode_id', 'libelle'];

    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }
}