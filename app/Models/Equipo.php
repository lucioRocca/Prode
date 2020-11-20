<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'nombre',
        'escudo',
    ];
    public function equiposL(){
        return $this->hasMany('App\Models\Partido', 'equipoL_id');
    }

    public function equiposV(){
        return $this->hasMany('App\Models\Partido', 'equipoV_id');
    }

    use HasFactory;
}
