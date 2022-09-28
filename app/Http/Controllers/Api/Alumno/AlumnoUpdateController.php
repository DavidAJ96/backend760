<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Alumno;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\Alumno\AlumnoResource;
use App\Http\Requests\AlumnoRequest;
use App\services\AlumnoService;

class AlumnoUpdateController extends BaseUpdateController{

    public function __construct(AlumnoService $alumnoService,AlumnoRequest $request)
    {
        parent::__construct($alumnoService,$request,AlumnoResource::class);
    }
}
