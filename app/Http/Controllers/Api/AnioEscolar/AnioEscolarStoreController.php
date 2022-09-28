<?php
namespace App\Http\Controllers\Api\AnioEscolar;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\PlanEstudio\AnioEscolarResource;
use App\Http\Requests\AnioEscolarRequest;
use App\Http\Requests\PlanEstudioRequest;
use App\services\AnioEscolarService;

class AnioEscolarStoreController extends BaseStore {
    public function __construct(AnioEscolarService $anioEscolarService, AnioEscolarRequest $request)
    {
      parent::__construct($anioEscolarService,$request,AnioEscolarResource::class);
    }
}
