<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Alumno;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\DesignacionCargo\DesignacionCargoResource;
use App\Http\Requests\DesignacionCargoRequest;
use App\services\DesignacionCargoService;

class AlumnoUpdateController extends BaseUpdateController{

    public function __construct(DesignacionCargoService $designacionCargoService,DesignacionCargoRequest $request)
    {
        parent::__construct($designacionCargoService,$request,DesignacionCargoResource::class);
    }
}
