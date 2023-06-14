<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $fillable = ['matiere_id', 'libelle'];

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
