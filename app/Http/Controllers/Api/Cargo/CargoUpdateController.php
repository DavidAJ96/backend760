<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Cargo;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\Cargo\CargoResource;
use App\Http\Requests\CargoRequest;
use App\services\CargoService;

class CargoUpdateController extends BaseUpdateController{

    public function __construct(CargoService $cargoService,CargoRequest $request)
    {
        parent::__construct($cargoService,$request,CargoResource::class);
    }
}
