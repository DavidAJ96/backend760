<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory,SoftDeletes;
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
        "telefono",
        "correo"
    ];

    protected $dates = ['deleted_at'];


    public function localidad(){
        return $this->belongsTo(Localidad::class,'id_localidad','id');
    }

}
