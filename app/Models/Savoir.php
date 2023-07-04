<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Planification;

class Savoir extends Model
{
    protected $fillable = ['competence_id', 'periode_id', 'libelle'];

    public function competence()
    {
        return $this->belongsTo(Competence::class,'competence_id');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class,'periode_id');
    }
    public function planifications()
    {
        return $this->hasMany(Planification::class, 'savoir_id');
    }
     public function niveaux()
    {
        return $this->belongsToMany(Niveau::class, 'niveaux_savoirs', 'savoir_id', 'niveau_id');
    }
        public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'savoir_id');
    }
}