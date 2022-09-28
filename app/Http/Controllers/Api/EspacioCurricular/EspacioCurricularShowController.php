<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\EspacioCurricular;

use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\EspacioCurricular\EspacioCurricularResource;
use App\services\EspacioCurricularService;

class EspacioCurricularShowController extends BaseShowController
{

    public function __construct(EspacioCurricularService $servicio)
    {
        parent::__construct($servicio, EspacioCurricularResource::class);
    }
}
