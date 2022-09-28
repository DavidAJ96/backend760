<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnioEscolar extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="anio_escolar";
    protected $fillable = [
        'id',
        'id_plan_estudio',
        'anio'
    ];

    public function plan_estudio(){
        return $this->belongsTo(PlanEstudio::class,'id_plan_estudio');
    }


}
