<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituacionRevista extends Model
{
    use HasFactory;
    protected $table = "situacion_revista";
    protected $fillable = [
        'descripcion'
    ];

}
