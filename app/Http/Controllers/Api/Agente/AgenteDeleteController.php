<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Agente;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\Agente\AgenteResource;
use App\services\AgenteService;

class AgenteDeleteController extends BaseDelete {

    public function __construct(AgenteService $personaService)
    {
        parent::__construct($personaService,AgenteResource::class);
    }
}
