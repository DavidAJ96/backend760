<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Curso;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\Curso\CursoResource;
use App\services\CursoService;

class CursoDeleteController extends BaseDelete {

    public function __construct(CursoService $cursoService)
    {
        parent::__construct($cursoService,CursoResource::class);
    }
}
