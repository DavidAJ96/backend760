<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CicloLectivo extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "ciclo_lectivo";
    protected $fillable = [
        "id",
		"nombre_ciclo",
		"nota_min",
		"nota_max",
		"nota_aprueba",
		"cant_espacios_pendientes",
		"fecha_inicio",
		"fecha_fin",
		"dias_clase",
		"cue_escuela",
		"estado"
    ];

    public function escuela(){
        return $this->belongsTo(Escuela::class,'cue_escuela');
    }

}
