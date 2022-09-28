<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\PlanEstudio;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\PlanEstudio\PlanEstudioResource;
use App\Http\Requests\PlanEstudioRequest;
use App\services\PlanEstudioService;

class PlanEstudioUpdateController extends BaseUpdateController{

    public function __construct(PlanEstudioService $personaService,PlanEstudioRequest $request)
    {
        parent::__construct($personaService,$request,PlanEstudioResource::class);
    }
}
