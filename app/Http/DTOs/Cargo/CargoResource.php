<?php
namespace App\Http\DTOs\Cargo;

use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\DTOs\Persona\PersonaResource;

class CargoResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'codigo'            => $this->norma_dictamen,
            'fecha_alta'        => $this->fecha_alta,
            'nombre_cargo'      => $this->nombre_cargo,
            'estado'            => $this->ley_aprobacion,
        ];
    }
}
