<?php
namespace App\Http\Controllers\Api\PlanEstudio;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\PlanEstudio\PlanEstudioResource;
use App\Http\Requests\PlanEstudioRequest;
use App\services\PlanEstudioService;

class PlanEstudioStoreController extends BaseStore {
    public function __construct(PlanEstudioService $personaService, PlanEstudioRequest $request)
    {
      parent::__construct($personaService,$request,PlanEstudioResource::class);
    }
}
