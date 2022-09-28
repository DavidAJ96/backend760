<?php
namespace App\Http\DTOs\Alumno;

use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\DTOs\Persona\PersonaResource;

class AlumnoResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_persona' => $this->id_persona,
            'legajo' => $this->legajo,
            'libro' => $this->libro,
            'folio' => $this->folio,
            'fecha_ingreso' => $this->fecha_ingreso,
            'persona' => new PersonaResource($this->persona),
            'estado' =>$this->estado,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
