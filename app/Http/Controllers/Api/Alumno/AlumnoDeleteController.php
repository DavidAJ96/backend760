<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Alumno;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\Persona\PersonaResource;
use App\services\AlumnoService;
use App\services\PersonaService;
use Illuminate\Http\Request;

class AlumnoDeleteController extends BaseDelete {

    public function __construct(AlumnoService $personaService)
    {
        parent::__construct($personaService,AlumnoResource::class);
    }
}
