<?php
namespace App\Http\Controllers\Api\Agente;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\Alumno\AlumnoResource;
use App\Http\Requests\AgenteRequest;
use App\services\AgenteService;

class AgenteStoreController extends BaseStore {
    public function __construct(AgenteService $personaService, AgenteRequest $request)
    {
      parent::__construct($personaService,$request,AlumnoResource::class);
    }
}
