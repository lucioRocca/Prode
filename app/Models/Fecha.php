<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    protected $fillable = [
        'fecha',
        'fecha_cierre',
        'torneo_id',
    ];

    public function grupos(){
        return $this->hasMany('App\Models\Grupo');
    }
    public function partidos(){
        return $this->hasMany('App\Models\Partido');
    }
    use HasFactory;
}
