<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    public function planification()
    {
        return $this->belongsTo(Planification::class);
    }
}
