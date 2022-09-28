<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\PlanEstudio;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\PlanEstudio\PlanEstudioResource;
use App\services\PlanEstudioService;

class PlanEstudioDeleteController extends BaseDelete {

    public function __construct(PlanEstudioService $planEstudioService)
    {
        parent::__construct($planEstudioService,PlanEstudioResource::class);
    }
}
