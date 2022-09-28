<?php
namespace App\Http\Controllers\Api\Cargo;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\Cargo\CargoResource;
use App\Http\Requests\CargoRequest;
use App\services\CargoService;

class CargoStoreController extends BaseStore {
    public function __construct(CargoService $cargoService, CargoRequest $request)
    {
      parent::__construct($cargoService,$request,CargoResource::class);
    }
}
