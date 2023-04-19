<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentM extends Model
{
    use HasFactory;
    protected $fillable = [
        'Civilité',
        'Nom',
        'Prénom',
        'Email',
        'Tél',
        'Identifiant'
    ];

    public function eleves()
    {
        return $this->hasMany(Eleve::class);
    }
}
