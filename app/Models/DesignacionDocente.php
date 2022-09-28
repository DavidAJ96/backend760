<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DesignacionDocente extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ="designacion_docente";
    protected $fillable = [
            'fecha_alta',
            'fecha_baja',
            'id_espacio_curricular',
            'id_curso',
            'id_agente',
            'id_situacion_revista',
            'estado',
            'observaciones',
    ];

    public function agente(){
        return $this->belongsTo(Agente::class,'id_agente');
    }

    public function espacio_curricular(){
        return $this->belongsTo(EspacioCurricular::class,'id_espacio_curricular');
    }

    public function curso(){
        return $this->belongsTo(Curso::class,'id_curso');
    }

    public function situacion_revista(){
        return $this->belongsTo(SituacionRevista::class,'id_situacion_revista');
    }


}
