<?php
namespace App\Http\Controllers\Api\Agente;

use App\Exports\AlumnoExport;
use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\Agente\AgenteCollection;
use App\services\AgenteService;
use Illuminate\Http\Request;

class AgenteIndexController extends BaseIndex {
    public function __construct(AgenteService $personaService, Request $request)
    {
        parent::__construct($personaService,$request,AgenteCollection::class,AlumnoExport::class);
    }


}
