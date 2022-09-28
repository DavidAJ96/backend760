<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\AnioEscolar;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\AnioEscolar\AnioEscolarResource;
use App\Http\Requests\AnioEscolarRequest;
use App\services\AnioEscolarService;

class AlumnoUpdateController extends BaseUpdateController{

    public function __construct(AnioEscolarService $alumnoService,AnioEscolarRequest $request)
    {
        parent::__construct($alumnoService,$request,AnioEscolarResource::class);
    }
}
