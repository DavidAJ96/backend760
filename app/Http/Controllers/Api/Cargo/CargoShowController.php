<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Cargo;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\Cargo\CargoResource;
use App\services\CargoService;

class CargoShowController extends BaseShowController{

    public function __construct(CargoService $servicio)
    {
       parent::__construct($servicio,CargoResource::class);
    }

}
