<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Provincia;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\PlanEstudio\ProvinciaResource;
use App\services\ProvinciaService;

class ProvinciaDeleteController extends BaseDelete {

    public function __construct(ProvinciaService $ProvinciaService)
    {
        parent::__construct($ProvinciaService,ProvinciaResource::class);
    }
}
