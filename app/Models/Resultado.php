<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resultado extends Model
{
    public function partido(){
        return $this->belongsTo('App\Models\User');
    }

    use HasFactory;
}
