<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = ['domaine_id', 'libelle'];

    public function domaine()
    {
        return $this->belongsTo(Domaine::class,'domaine_id');
    }
    public function savoirs()
    {
        return $this->hasMany(Savoir::class,'savoir_id');
    }
}
