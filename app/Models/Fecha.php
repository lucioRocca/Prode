<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    public function grupos(){
        return $this->hasMany('App\Models\Grupo');
    }
    public function partidos(){
        return $this->hasMany('App\Models\Partido');
    }
    use HasFactory;
}
