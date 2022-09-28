<?php
namespace App\Http\Controllers\Api\DesignacionCargo;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\DesignacionCargo\DesignacionCargoResource;
use App\Http\Requests\DesignacionCargoRequest;
use App\services\DesignacionCargoService;

class DesignacionCargoStoreController extends BaseStore {
    public function __construct(DesignacionCargoService $designacionCargoService, DesignacionCargoRequest $request)
    {
      parent::__construct($designacionCargoService,$request,DesignacionCargoResource::class);
    }
}
