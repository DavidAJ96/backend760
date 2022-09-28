<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EspacioCurricular extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ="espacio_curricular";
    protected $fillable =[
        'id',
        'cod_espacio' ,
        'id_anio_escolar' ,
        'espacio_curricular',
        'nro_orden'
    ];

    public function anio_escolar(){
        return $this->belongsTo(AnioEscolar::class,'id_anio_escolar','id');
    }


}
