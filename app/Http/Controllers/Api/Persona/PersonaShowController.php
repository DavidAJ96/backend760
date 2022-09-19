<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Persona;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\Persona\PersonaResource;
use App\services\PersonaService;

class PersonaShowController extends BaseShowController{

    public function __construct(PersonaService $servicio)
    {
       parent::__construct($servicio,PersonaResource::class);
    }

}
