<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public function fecha(){
        return $this->belongsTo('App\Models\Fecha');
    }

    public function valor(){
        return $this->belongsTo('App\Models\Valor');
    }

    public function apuestas(){
        return $this->hasMany('App\Models\Apuesta');
    }
    use HasFactory;
}
