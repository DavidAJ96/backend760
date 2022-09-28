<?php
namespace App\Http\DTOs\CicloLectivo;

use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\DTOs\Persona\PersonaResource;

class CicloLectivoResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id'                        => $this->id,
            'nombre_ciclo'              => $this->nombre_ciclo,
            'nota_min'                  => $this->nota_min,
            'nota_max'                  => $this->nota_max,
            'nota_aprueba'              => $this->nota_aprueba,
            'cant_espacios_pendientes'  => $this->cant_espacios_pendientes,
            'fecha_inicio'              => $this->fecha_inicio,
            'fecha_fin'                 => $this->fecha_fin,
            'dias_clase'                => $this->dias_clase,
            'cue_escuela'               => $this->cue_escuela,
            'estado'                    => $this->estado,
            'escuela'                   => $this->escuela
        ];

    }
}
