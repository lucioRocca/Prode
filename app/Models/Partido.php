<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillable = [
        'equipoL_id',
        'equipoV_id',
    ];
    public function equipoL(){
        return $this->belongsTo('App\Models\Equipo', 'equipoL_id');
    }


    public function equipoV(){
        return $this->belongsTo('App\Models\Equipo', 'equipoV_id');
    }


    public function fecha(){
        return $this->belongsTo('App\Models\Fecha');
    }


    public function resultado(){
        return $this->hasOne('App\Models\Resultado');
    }

    public function apuestas(){
        return $this->hasMany('App\Models\Apuesta');
    }
    use HasFactory;
}
