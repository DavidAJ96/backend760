<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Localidad;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\PlanEstudio\LocalidadResource;
use App\services\LocalidadService;


class LocalidadShowController extends BaseShowController{

    public function __construct(LocalidadService $servicio)
    {
       parent::__construct($servicio,LocalidadResource::class);
    }

}
