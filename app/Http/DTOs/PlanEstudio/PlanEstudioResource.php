<?php
namespace App\Http\DTOs\PlanEstudio;

use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\DTOs\Persona\PersonaResource;

class PlanEstudioResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id'               => $this->id,
            'nombre_plan'      => $this->nombre_plan,
            'ley_equivalencia' => $this->ley_equivalencia,
            'norma_dictamen'   => $this->norma_dictamen,
            'ley_aprobacion'   => $this->ley_aprobacion,
        ];
    }
}
