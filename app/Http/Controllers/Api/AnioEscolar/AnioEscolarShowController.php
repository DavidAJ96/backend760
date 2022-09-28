<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\AnioEscolar;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\PlanEstudio\AnioEscolarResource;
use App\services\AnioEscolarService;


class AnioEscolarShowController extends BaseShowController{

    public function __construct(AnioEscolarService $servicio)
    {
       parent::__construct($servicio,AnioEscolarResource::class);
    }

}
