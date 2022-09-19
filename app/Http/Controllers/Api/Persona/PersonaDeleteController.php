<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Persona;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\Persona\PersonaResource;
use App\services\PersonaService;
use Illuminate\Http\Request;

class PersonaDeleteController extends BaseDelete {

    public function __construct(PersonaService $personaService)
    {
        parent::__construct($personaService,PersonaResource::class);
    }
}
