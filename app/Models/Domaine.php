<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $fillable = ['matiere_id', 'libelle'];

    public function matiere()
    {
        return $this->belongsTo(Matiere::class,'matiere_id');
    }
    public function competence()
    {
        return $this->hasMany(Competence::class,'competence_id');
    }
}
