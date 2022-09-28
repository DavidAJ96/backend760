<?php
namespace App\Http\Controllers\Api\Cargo;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\Cargo\CargoCollection;
use App\services\CargoService;
use Illuminate\Http\Request;

class CargoIndexController extends BaseIndex {
    public function __construct(CargoService $cargoService, Request $request)
    {
        parent::__construct($cargoService,$request,CargoCollection::class);
    }


}
