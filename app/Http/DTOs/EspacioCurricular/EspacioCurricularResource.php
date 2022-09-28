<?php
namespace App\Http\DTOs\EspacioCurricular;

use App\Http\DTOs\AnioEscolar\AnioEscolarResource;
use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\DTOs\Persona\PersonaResource;
use App\Http\DTOs\PlanEstudio\PlanEstudioResource;

class EspacioCurricularResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'cod_espacio'       => $this->id_plan_estudio,
            'id_anio_escolar'   => $this->id_anio_escolar,
            'espacio_curricular'=> $this->espacio_curricular,
            'nro_orden'         => $this->nro_orden,
            'anio_escolar'      => new AnioEscolarResource($this->anio_escolar)
        ];
    }
}
