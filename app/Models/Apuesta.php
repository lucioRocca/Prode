<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    protected $fillable = [
        'partido_id',
        'grupo_id',
        'user_id',
        'equipoL',
        'equipoV',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function partido(){
        return $this->belongsTo('App\Models\Partido');
    }
    public function grupo(){
        return $this->belongsTo('App\Models\Grupo');
    }
    use HasFactory;
}
