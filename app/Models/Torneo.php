<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    public function fechas(){
        return $this->hasMany('App\Models\Fecha');
    }
    use HasFactory;
}
