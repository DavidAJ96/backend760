<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="curso";
    protected $fillable = [
        'id_anio_escolar',
        'cue_escuela',
        'division',
        'id_designacion_preseptor',
        'id_designacion_tutor'
    ];

    public function anio_escolar(){
        return $this->belongsTo(AnioEscolar::class,'id_anio_escolar','id');
    }

    public function designacion_tutor(){
        return $this->belongsTo(DesignacionCargo::class,'id_designacion_tutor','id');
    }

    public function designacion_preceptor(){
        return $this->belongsTo(DesignacionCargo::class,'id_designacion_preceptor','id');
    }

}
