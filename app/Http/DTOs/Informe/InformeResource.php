<?php
namespace App\Http\DTOs\Informe;

use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\DTOs\Persona\PersonaResource;

class InformeResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id'                     => $this->id,
            'nro_orden'              => $this->nro_orden,
            'leyenda'                => $this->leyenda,
            'nombre'                 => $this->nombre,
            'definitivo'             => $this->definitivo,
            'cue_escuela'            => $this->cue_escuela,
            'escuela'                => $this->escuela
        ];

    }
}
