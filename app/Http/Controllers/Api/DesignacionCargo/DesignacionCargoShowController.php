<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\DesignacionCargo;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\DesignacionCargo\DesignacionCargoResource;
use App\services\DesignacionCargoService;

class DesignacionCargoShowController extends BaseShowController{

    public function __construct(DesignacionCargoService $servicio)
    {
       parent::__construct($servicio,DesignacionCargoResource::class);
    }

}
