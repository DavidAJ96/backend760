<?php
namespace App\Http\Controllers\Api\Localidad;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\PlanEstudio\LocalidadResource;
use App\Http\Requests\LocalidadRequest;
use App\Http\Requests\PlanEstudioRequest;
use App\services\LocalidadService;

class LocalidadStoreController extends BaseStore {
    public function __construct(LocalidadService $LocalidadService, LocalidadRequest $request)
    {
      parent::__construct($LocalidadService,$request,LocalidadResource::class);
    }
}
