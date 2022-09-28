<?php
namespace App\Http\Controllers\Api\DesignacionDocente;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\DesignacionCargo\DesignacionCargoResource;
use App\Http\Requests\DesignacionCargoRequest;
use App\Http\Requests\DesignacionDocenteRequest;
use App\services\DesignacionCargoService;
use App\services\DesignacionDocenteService;

class DesignacionDocenteStoreController extends BaseStore {
    public function __construct(DesignacionDocenteService $designacionDocenteService, DesignacionDocenteRequest $request)
    {
      parent::__construct($designacionDocenteService,$request,DesignacionDocenteRequest::class);
    }
}
