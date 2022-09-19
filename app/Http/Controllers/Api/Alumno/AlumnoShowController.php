<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Alumno;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\Alumno\AlumnoResource;
use App\services\AlumnoService;


class AlumnoShowController extends BaseShowController{

    public function __construct(AlumnoService $servicio)
    {
       parent::__construct($servicio,AlumnoResource::class);
    }

}
