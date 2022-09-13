<?php
namespace App\Http\DTOs\Persona;

use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Localidad\LocalidadResource;

class PersonaResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_nacionalidad' => $this->id_nacionalidad,
            'documento' => $this->documento,
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'lugar_nacimiento' => $this->lugar_nacimiento,
            'sexo' => $this->sexo,
            'calle' => $this->calle,
            'altura' => $this->altura,
            'piso' => $this->piso,
            'depto' => $this->depto,
            'barrio' => $this->barrio,
            'id_localidad' => $this->id_localidad,
            'telefono' => $this->telefono,
            'localidad' => new LocalidadResource($this->localidad)
         ];
    }
}
