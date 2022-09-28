<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Agente;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\Agente\AgenteResource;
use App\Http\Requests\AgenteRequest;
use App\services\AgenteService;

class AgenteUpdateController extends BaseUpdateController{

    public function __construct(AgenteService $agenteService,AgenteRequest $request)
    {
        parent::__construct($agenteService,$request,AgenteResource::class);
    }
}
