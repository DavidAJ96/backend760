<?php
namespace App\Http\DTOs\DesignacionDocente;

use App\Http\DTOs\Agente\AgenteResource;
use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Curso\CursoResource;
use App\Http\DTOs\EspacioCurricular\EspacioCurricularResource;

class DesignacionDocenteResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id'                   => $this->id,
            'fecha_alta'           => $this->fecha_alta,
            'fecha_baja'           => $this->fecha_baja,
            'id_espacio_curricular'=> $this->id_cargo,
            'id_curso'             => $this->id_curso,
            'id_agente'            => $this->id_agente,
            'id_situacion_revista' => $this->id_situacion_revista,
            'estado'               => $this->estado,
            'observaciones'        => $this->observaciones,
            'cargo'                => new EspacioCurricularResource($this->cargo),
            'agente'               => new AgenteResource($this->agente),
            'curso'                => new CursoResource($this->curso),
            'situacion_revista'    => $this->situacion_revista,
        ];
    }
}
