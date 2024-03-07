<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos_Rob extends Model
{
    use HasFactory;

    public function usuario(){
        return $this->belongsTo(Usuarios_Rob::class);
    }
    
    public function cursos(){
        return $this->hasMany(Cursos_Rob::class);
    }
}
