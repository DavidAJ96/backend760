<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanEstudio extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ="plan_estudio";
    protected $fillable = [
        'nombre_plan',
        'ley_equivalencia',
        'norma_dictamen',
        'ley_aprobacion'

    ];
}
