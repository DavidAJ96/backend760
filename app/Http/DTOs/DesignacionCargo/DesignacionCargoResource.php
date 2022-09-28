<?php
namespace App\Http\DTOs\DesignacionCargo;

use App\Http\DTOs\Agente\AgenteResource;
use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Cargo\CargoResource as CargoCargoResource;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\DTOs\Persona\PersonaResource;

class DesignacionCargoResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id'                   => $this->id,
            'fecha_alta'           => $this->fecha_alta,
            'fecha_baja'           => $this->fecha_baja,
            'id_cargo'             => $this->id_cargo,
            'id_agente'            => $this->id_agente,
            'id_situacion_revista' => $this->id_situacion_revista,
            'estado'               => $this->estado,
            'observaciones'        => $this->observaciones,
            'cargo'                => new CargoCargoResource($this->cargo),
            'agente'               => new AgenteResource($this->agente),
            'situacion_revista'    => $this->situacion_revista,
        ];
    }
}
