<?php
namespace App\Http\Controllers\Api\Alumno;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\Alumno\AlumnoResource;
use App\Http\Requests\PersonaRequest;
use App\services\AlumnoService;

class AlumnoStoreController extends BaseStore {
    public function __construct(AlumnoService $personaService, PersonaRequest $request)
    {
      parent::__construct($personaService,$request,AlumnoResource::class);
    }
}
