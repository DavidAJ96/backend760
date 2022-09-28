<?php
namespace App\Http\Controllers\Api\Curso;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\Curso\CursoResource;
use App\Http\Requests\CursoRequest;
use App\services\CursoService;

class CursoStoreController extends BaseStore {
    public function __construct(CursoService $cursoService, CursoRequest $request)
    {
      parent::__construct($cursoService,$request,CursoResource::class);
    }
}
