<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Curso;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\Curso\CursoResource;
use App\Http\Requests\CursoRequest;
use App\services\CursoService;

class CursoUpdateController extends BaseUpdateController{

    public function __construct(CursoService $cursoService,CursoRequest $request)
    {
        parent::__construct($cursoService,$request,CursoResource::class);
    }
}
