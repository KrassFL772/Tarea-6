<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos_Rob extends Model
{
    use HasFactory;

    public function grupos(){
        return $this->belongsTo(Grupos_Rob::class);
    }
}
