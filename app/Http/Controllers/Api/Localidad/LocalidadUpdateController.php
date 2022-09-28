<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Localidad;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\Localidad\LocalidadResource;
use App\Http\Requests\LocalidadRequest;
use App\services\LocalidadService;

class LocalidadUpdateController extends BaseUpdateController{

    public function __construct(LocalidadService $localidadService,LocalidadRequest $request)
    {
        parent::__construct($localidadService,$request,LocalidadResource::class);
    }
}
