<?php

namespace App\Http\Controllers\Api\EspacioCurricular;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\EspacioCurricular\EspacioCurricularResource;
use App\Http\DTOs\PlanEstudio\AnioEscolarResource;
use App\Http\Requests\EspacioCurricularRequest;
use App\services\AnioEscolarService;

class EspacioCurricularStoreController extends BaseStore
{
    public function __construct(AnioEscolarService $anioEscolarService, EspacioCurricularRequest $request)
    {
        parent::__construct($anioEscolarService, $request, EspacioCurricularResource::class);
    }
}
