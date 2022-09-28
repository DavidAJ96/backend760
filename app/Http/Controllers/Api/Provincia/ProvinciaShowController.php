<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Provincia;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\PlanEstudio\ProvinciaResource;
use App\services\ProvinciaService;


class ProvinciaShowController extends BaseShowController{

    public function __construct(ProvinciaService $servicio)
    {
       parent::__construct($servicio,ProvinciaResource::class);
    }

}
