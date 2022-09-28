<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Persona;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\Persona\PersonaResource;
use App\Http\Requests\PersonaRequest;
use App\services\PersonaService;

class PersonaUpdateController extends BaseUpdateController{

    public function __construct(PersonaService $personaService,PersonaRequest $request)
    {
        parent::__construct($personaService,$request,PersonaResource::class);
    }
}
