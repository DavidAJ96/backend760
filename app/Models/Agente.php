<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agente extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="agente";
    protected $fillable = [
        'fecha_ingreso',
        'id_persona',
        'cue_escuela'
    ];

    public function persona(){
        return $this->belongsTo(Persona::class,'id_persona','id');
    }

}
