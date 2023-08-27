<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    protected $fillable = [
        'Matricule',
        'Nom',
        'Prénom',
        'Nom(Arabe)',
        'Prénom(Arabe)',
        'Sexe',
        'Email',
        'date_naissance',
        'Adress',
        'image'
    ];

  public function parents()
    {
        return $this->belongsToMany(ParentM::class, 'eleve_parent', 'eleve_id', 'parent_m_s_id')
            ->withPivot('relation_type');
    }
// Dans le modèle Eleve (app/Models/Eleve.php)

public function appreciations()
{
    return $this->hasMany(Appreciation::class);
}



    
}
