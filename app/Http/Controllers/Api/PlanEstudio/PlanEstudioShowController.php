<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\PlanEstudio;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\PlanEstudio\PlanEstudioResource;
use App\services\PlanEstudioService;

class PlanEstudioShowController extends BaseShowController{

    public function __construct(PlanEstudioService $servicio)
    {
       parent::__construct($servicio,PlanEstudioResource::class);
    }

}
