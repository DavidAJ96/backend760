<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Cargo;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\Cargo\CargoResource;
use App\services\CargoService;

class CargoDeleteController extends BaseDelete {

    public function __construct(CargoService $cargoService)
    {
        parent::__construct($cargoService,CargoResource::class);
    }
}
