<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluation;
use App\Models\Publication;

class Status extends Model
{
    protected $fillable = ['name'];

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
  
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
