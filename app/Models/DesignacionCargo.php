<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DesignacionCargo extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "designacion_cargo";
    protected $fillable = [
        'fecha_alta',
        'fecha_baja',
        'id_cargo',
        'id_agente',
        'id_situacion_revista',
        'estado',
        'observaciones'
    ];

    public function agente(){
        return $this->belongsTo(Agente::class,'id_agente');
    }

    public function cargo(){
        return $this->belongsTo(Cargo::class,'id_cargo');
    }

    public function situacion_revista(){
        return $this->belongsTo(SituacionRevista::class,'id_situacion_revista');
    }

}
