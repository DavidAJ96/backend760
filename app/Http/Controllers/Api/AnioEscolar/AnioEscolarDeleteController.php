<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\AnioEscolar;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\PlanEstudio\AnioEscolarResource;
use App\services\AnioEscolarService;

class AnioEscolarDeleteController extends BaseDelete {

    public function __construct(AnioEscolarService $anioEscolarService)
    {
        parent::__construct($anioEscolarService,AnioEscolarResource::class);
    }
}
