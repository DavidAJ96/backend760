<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\DesignacionDocente;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\DesignacionDocente\DesignacionDocenteResource;
use App\Http\Requests\DesignacionDocenteRequest;
use App\services\DesignacionCargoService;

class DesignacionDocenteUpdateController extends BaseUpdateController{

    public function __construct(DesignacionCargoService $designacionCargoService,DesignacionDocenteRequest $request)
    {
        parent::__construct($designacionCargoService,$request,DesignacionDocenteResource::class);
    }
}
