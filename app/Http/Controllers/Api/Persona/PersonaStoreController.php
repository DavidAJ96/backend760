<?php
namespace App\Http\Controllers\Api\Persona;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\Requests\PersonaRequest;
use App\services\PersonaService;

class PersonaStoreController extends BaseStore {
    public function __construct(PersonaService $personaService, PersonaRequest $request)
    {
      parent::__construct($personaService,$request,PersonaResource::class);
    }
}
