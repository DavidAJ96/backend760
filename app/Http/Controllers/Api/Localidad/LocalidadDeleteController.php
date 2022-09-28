<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Localidad;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\PlanEstudio\LocalidadResource;
use App\services\LocalidadService;

class LocalidadDeleteController extends BaseDelete {

    public function __construct(LocalidadService $LocalidadService)
    {
        parent::__construct($LocalidadService,LocalidadResource::class);
    }
}
