<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = "persona";
    protected $fillable = [
        "id",
        "id_nacionalidad" ,
        "documento",
        "nombre"          ,
        "apellidos"       ,
        "fecha_nacimiento",
        "lugar_nacimiento",
        "sexo"            ,
        "calle"           ,
        "altura"          ,
        "piso"            ,
        "depto"           ,
        "barrio"          ,
        "id_localidad"    ,
        "telefono"
    ];
    public function localidad(){
        return $this->belongsTo(Localidad::class,'id_localidad','id');
    }

}
