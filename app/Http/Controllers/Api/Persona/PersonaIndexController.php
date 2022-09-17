<?php
namespace App\Http\Controllers\Api\Persona;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\Persona\PersonaCollection;
use App\services\PersonaService;
use Illuminate\Http\Request;

class PersonaIndexController extends BaseIndex {
    public function __construct(PersonaService $personaService, Request $request)
    {
        parent::__construct($personaService,$request);
    }

    public function __invoke()
    {
        $this->getService()->setFilter($this->getRequest());
        $data = $this->getService()->getRepository()->getAll();
        return response()->json(new PersonaCollection($data));
    }

}
