<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = ['nom', 'description', 'responsable_id'];

    public function responsable()
    {
        return $this->belongsTo(Enseignant::class, 'responsable_id');
    }

    public function matieres()
    {
        return $this->hasMany(Matiere::class);
    }

    public function enseignants()
    {
        return $this->belongsToMany(Enseignant::class, 'departement_enseignant');
    }
}
/* hasMany est utilisé pour définir une relation de
 type "One-to-Many" (Un-à-Plusieurs), 
 où un modèle possède plusieurs instances
  d'un autre modèle. Par exemple,
   un département peut avoir plusieurs enseignants, 
   donc le modèle "Departement" utilisera hasMany
    pour définir cette relation.

belongsToMany est utilisé pour définir une relation 
de type "Many-to-Many" (Plusieurs-à-Plusieurs),
 où plusieurs instances d'un modèle sont associées 
 à plusieurs instances d'un autre modèle, via une
  table de liaison intermédiaire. Par exemple, un 
  enseignant peut appartenir à plusieurs départements 
  et un département peut avoir plusieurs enseignants, 
  donc le modèle "Departement" et le modèle 
  "Enseignant" utiliseront belongsToMany pour définir
   cette relation.*/