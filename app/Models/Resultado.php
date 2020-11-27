<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resultado extends Model
{
    protected $fillable = [
        'partido_id',
        'equipoL',
        'equipoV',
    ];

    public function partido(){
        return $this->belongsTo('App\Models\User');
    }

    use HasFactory;
}
