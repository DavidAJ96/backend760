<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Agente;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\Alumno\AlumnoResource;
use App\services\AgenteService;


class AgenteShowController extends BaseShowController{

    public function __construct(AgenteService $servicio)
    {
       parent::__construct($servicio,AlumnoResource::class);
    }

}
