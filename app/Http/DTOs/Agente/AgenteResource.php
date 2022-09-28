<?php
namespace App\Http\DTOs\Agente;

use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\DTOs\Persona\PersonaResource;

class AgenteResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_persona' => $this->id_persona,
            'fecha_ingreso' => $this->fecha_ingreso,
            'persona' => new PersonaResource($this->persona),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
