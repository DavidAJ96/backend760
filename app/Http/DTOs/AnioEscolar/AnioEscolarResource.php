<?php
namespace App\Http\DTOs\AnioEscolar;

use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\DTOs\Persona\PersonaResource;
use App\Http\DTOs\PlanEstudio\PlanEstudioResource;

class AnioEscolarResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id'              => $this->id,
            'id_plan_estudio' => $this->id_plan_estudio,
            'anio'            => $this->anio,
            'plan_estudio'    => new PlanEstudioResource($this->plan_estudio)
        ];
    }
}
