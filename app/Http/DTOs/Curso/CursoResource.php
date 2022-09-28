<?php
namespace App\Http\DTOs\Curso;

use App\Http\DTOs\BaseJsonResource;

class CursoResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id'                       => $this->id,
            'id_anio_escolar'          => $this->id_anio_escolar,
            'cue_escuela'              => $this->cue_escuela,
            'division'                 => $this->division,
            'id_designacion_preseptor' => $this->id_designacion_preseptor,
            'id_designacion_tutor'     => $this->id_designacion_tutor,
            'anio_escolar'             => $this->anio_escolar,
            'estado'                   => $this->estado,
            'designacion_tutor'        => $this->designacion_tutor,
            'designacion_preceptor'    => $this->designacion_preceptor,
        ];
    }
}
