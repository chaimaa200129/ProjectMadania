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
        'الاسم العائلي',
        'الاسم الشخصي',
        'Sexe',
        'Email',
        'date_naissance',
        'Adress',
        'image'
    ];

    public function parent()
    {
        return $this->belongsTo(ParentM::class);
    }
    
}
