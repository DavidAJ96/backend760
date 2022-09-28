<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Informe extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ="informe";
    protected $fillable =[
		"nro_orden",
		"leyenda",
		"nombre",
		"definitivo",
		"cue_escuela",
    ];

    public function escuela(){
        return $this->belongsTo(Escuela::class,'cue_escuela');
    }


}
