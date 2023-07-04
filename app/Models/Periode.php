<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $fillable = ['nom', 'date_debut', 'date_fin', 'ref_id', 'cycle_id'];

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'ref');
    }

    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }

    public function sousPeriodes()
    {
        return $this->hasMany(Periode::class, 'ref');
    }
     public function savoirs()
    {
        return $this->hasMany(Savoir::class,'savoir_id');
    }
}
