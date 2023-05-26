<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EleveParent extends Model
{
    protected $table = 'eleve_parent';

    protected $fillable = ['relation'];
}
